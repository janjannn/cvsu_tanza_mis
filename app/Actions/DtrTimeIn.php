<?php

namespace App\Actions;

use App\Enums\TimePeriod;
use App\Models\DailySessions;
use App\Models\Dtr;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DtrTimeIn
{
    public function handle(User $user): void
    {
        try {

            $today = Carbon::now();

            DB::beginTransaction();

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

        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            throw $e;
        }
    }
}
