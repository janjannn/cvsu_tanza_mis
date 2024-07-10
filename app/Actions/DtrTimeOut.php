<?php

namespace App\Actions;

use App\Models\DailySessions;
use App\Models\Dtr;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DtrTimeOut
{
    public function handle(User $user): void
    {
        try {

            $today = Carbon::now();

            DB::beginTransaction();

            $dtr = Dtr::where('date', '=', $today->format('Y-m-d'))
                ->where('user_id', '=', $user->id)
                ->firstOrFail();

            $record = DailySessions::where('dtr_id', '=', $dtr->id)
                ->whereNull('end_time')
                ->firstOrFail();

            $record->end_time = $today->toDate();
            $record->save();

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            throw $e;
        }
    }
}
