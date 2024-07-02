<?php

namespace App\Http\Controllers;

use App\Models\Dtr;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class DTRFormController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('adminDtr', ['users' => $users]);
    }

    public function downloadDtr($userId)
    {

        $currentMonth = Carbon::now();

        $user = User::where('id', '=', $userId)->firstOrFail();

        $records = Dtr::where('user_id', '=', $user->id)
            ->whereBetween('date', [$currentMonth->format('Y-m-01'), $currentMonth->format('Y-m-31')])
            ->get();

        foreach ($records as $record) {
            $day = (int)Carbon::parse($record->date)->format('d');
            $dtr[$day] = $record;
        }

        $pdf = PDF::loadView('dtr_form', [
            'dtr' => $dtr,
            'user' => $user,
            'month' => $currentMonth->format('M'),
            'inCharge' => 'John Doe',
        ]);

        $pdf->setPaper('A4');

        return $pdf->download('dtr.pdf');
    }

}
