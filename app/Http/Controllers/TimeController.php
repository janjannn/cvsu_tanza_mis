<?php

namespace App\Http\Controllers;

use App\Actions\DtrReport;
use App\Actions\DtrTimeIn;
use App\Actions\DtrTimeOut;
use Carbon\Carbon;
use App\Models\User;

class TimeController extends Controller
{

    public function timeIn($cvsuId, DtrTimeIn $dtrTimeIn)
    {
        try {

            $user = User::where('cvsu_id', '=', $cvsuId)->firstOrFail();

            $dtrTimeIn->handle($user);

            return view('timein_success', ['id' => $cvsuId]);
        } catch (\Exception $e) {
            report($e);
            return redirect('/dtr')->with('error', 'Time In Failed');
        }
    }

    public function timeOut($cvsuId, DtrTimeOut $dtrTimeOut)
    {
        try {

            $user = User::where('cvsu_id', '=', $cvsuId)
                ->firstOrFail();

            $dtrTimeOut->handle($user);

            return view('timeout_success', ['id' => $cvsuId]);
        } catch (\Exception $e) {
            report($e);
            return redirect('/dtr')->with('error', 'Time Out Failed!');
        }
    }

    public function printDTR($cvsuId, DtrReport $dtrReport)
    {

        $currentMonth = Carbon::now();

        $user = User::where('cvsu_id', '=', $cvsuId)->firstOrFail();

        $userDtr = $dtrReport->handle($currentMonth, $user);

        return view('dtr_report', $userDtr);
    }

}
