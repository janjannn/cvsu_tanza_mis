<?php

namespace App\Actions;

use App\Models\Dtr;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DtrReport
{
    public function handle(\DateTime $date, User $user): array
    {
        try {

            $reportDate = Carbon::parse($date);

            $records = Dtr::where('user_id', '=', $user->id)
                ->whereBetween('date', [$reportDate->format('Y-m-01'), $reportDate->endOfMonth()->toDateString()])
                ->get();

            $officerInCharge = User::where('department', '=','HR')->first();

            $totalWorkedMinutes = 0;

            foreach ($records as $record) {
                $day = (int)Carbon::parse($record->date)->format('d');
                $dtr[$day] = $record;
                $totalWorkedMinutes += $record->getTotalWorkedMinutes();
            }

            return [
                'totalWorkedMinutes' => $totalWorkedMinutes,
                'dtr' => $dtr ?? [],
                'user' => $user,
                'month' => $reportDate->format('M'),
                'inCharge' => isset($officerInCharge) ? $officerInCharge->name : 'John Doe'
            ];

        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            throw $e;
        }
    }
}
