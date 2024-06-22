<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function timeIn($id)
    {
        // Logic to handle time in
        return view('timein_success', ['id' => $id]);
    }

    public function timeOut($id)
    {
        // Logic to handle time out
        return view('timeout_success', ['id' => $id]);
    }

    public function printDTR($id)
    {
        // Logic to generate and print DTR
        $user = User::find($id);
        $dtr = $user->dtr; // Assume there's a relation or method to get DTR

        return view('dtr_report', ['user' => $user, 'dtr' => $dtr]);
    }
}
