<?php

namespace App\Actions;

use App\Enums\TimePeriod;
use App\Exceptions\DtrException;
use App\Models\DailySessions;
use App\Models\Dtr;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DtrAction
{

    public function handle(User $user)
    {
        try {

            $today = Carbon::now();

            DB::beginTransaction();

            if (!$this->isPresentToDay($user)) {

                $dtr = Dtr::create([
                    'user_id' => $user->id,
                    'date' => Carbon::now(),
                ]);

                DailySessions::create([
                    'dtr_id' => $dtr->id,
                    'start_time' => Carbon::now()->toDate(),
                    'time_period' => TimePeriod::from(Carbon::now()->format('A')),
                ]);

                DB::commit();

                return;
            }


            //find dtr for current date
            $dtr = Dtr::where('date', $today->format('Y-m-d'))
                ->where('user_id', '=', $user->id)
                ->first();

            if ($this->haveMorningSession($user, $dtr->id)) {

                DailySessions::where('dtr_id', $dtr->id)
                    ->where('time_period', TimePeriod::AM->name)
                    ->whereNull('end_time')
                    ->update(['end_time' => $today->format('Y-m-d')]);

                DB::commit();
                return;
            }

            $record = DailySessions::where('dtr_id', $dtr->id)
                ->where('time_period', TimePeriod::PM->name)
                ->first();

            if (!isset($record)) {

                DailySessions::create([
                    'dtr_id' => $dtr->id,
                    'start_time' => Carbon::now()->toDate(),
                    'time_period' => TimePeriod::from(Carbon::now()->format('A')),
                ]);

                DB::commit();
                return;
            }

            $record = DailySessions::where('dtr_id', $dtr->id)
                ->where('time_period', TimePeriod::PM->name)
                ->whereNull('end_time')
                ->first();

            if (isset($record)) {
                $record->end_time = $today->toDate();
                $record->save();
                DB::commit();
                return;
            }

            throw new DtrException('You have already completed your sign today');

        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            throw $e;
        }
    }

    private function haveMorningSession(User $user, $dtrId): bool
    {
        $dtr = DailySessions::where('dtr_id', $dtrId)
            ->where('time_period', TimePeriod::AM->name)
            ->whereNull('end_time')
            ->first();

        return isset($dtr);
    }

    private function isPresentToDay(User $user): bool
    {
        $today = Carbon::now();

        $dtr = Dtr::where('date', $today->format('Y-m-d'))
            ->where('user_id', $user->id)
            ->first();

        return isset($dtr);
    }

}
