<?php

namespace App\Http\Controllers;

use App\Enums\TimePeriod;
use App\Models\DailySessions;
use App\Models\Dtr;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    public function timeIn($id)
    {
        try {

            DB::beginTransaction();

            $user = User::where('cvsu_id', '=', $id)->firstOrFail();

            $today = Carbon::now();

            $dtr = Dtr::where('date', '=', $today->format('Y-m-d'))
                ->where('user_id', '=', $user->id)
                ->first();

            if (!isset($dtr)) {
                $dtr = Dtr::create([
                    'user_id' => $user->id,
                    'date' => Carbon::now(),
                ]);
            }

            $session = DailySessions::create([
                'dtr_id' => $dtr->id,
                'start_time' => Carbon::now()->toDate(),
                'time_period' => TimePeriod::from(Carbon::now()->format('A')),
            ]);

            DB::commit();
            return view('timein_success', ['id' => $id]);
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect('/dtr')->with('error', 'Time In Failed');
        }
    }

    public function timeOut($id)
    {
        try {

            DB::beginTransaction();

            $user = User::where('cvsu_id', '=', $id)
                ->firstOrFail();

            $dtr = Dtr::where('date', '=', Carbon::now()->format('Y-m-d'))
                ->where('user_id', '=', $user->id)
                ->firstOrFail();

            $record = DailySessions::where('dtr_id', '=', $dtr->id)
                ->whereNull('end_time')
                ->firstOrFail();

            $record->end_time = Carbon::now()->toDate();
            $record->save();

            DB::commit();

            return view('timeout_success', ['id' => $id]);
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect('/dtr')->with('error', 'Time Out Failed!');
        }
    }

    public function printDTR($id)
    {

        $currentMonth = Carbon::now();

        $user = User::where('id', '=', $id)->firstOrFail();

        $records = Dtr::where('user_id', '=', $user->id)
            ->whereBetween('date', [$currentMonth->format('Y-m-01'), $currentMonth->format('Y-m-31')])
            ->get();

        foreach ($records as $record) {
            $day = (int)Carbon::parse($record->date)->format('d');
            $dtr[$day] = $record;
        }

        return view('dtr_report', [
            'dtr' => $dtr ?? [],
            'user' => $user,
            'month' => $currentMonth->format('M'),
            'inCharge' => 'John Doe',
        ]);
    }

}
