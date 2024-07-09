<?php

namespace App\Http\Controllers;

use App\Actions\DtrReport;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class DTRFormController extends Controller
{
    public function index()
    {

        $users = User::where('role', '=', 'user')->get();

        return view('adminDtr', ['users' => $users]);
    }

    public function downloadDtr($userId, DtrReport $dtrReport)
    {

        $currentMonth = Carbon::now();

        $user = User::where('id', '=', $userId)->firstOrFail();

        $userDtr = $dtrReport->handle($currentMonth, $user);

        $pdf = PDF::loadView('dtr_form', $userDtr);

        $pdf->setPaper('A4');

        return $pdf->download('dtr.pdf');
    }

}
