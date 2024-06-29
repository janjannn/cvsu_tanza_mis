<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; // Adjust this according to your report model

class PrintController extends Controller
{
    public function index()
    {
        // Example logic to fetch data for printing report
        $reports = Report::all(); // Replace with your actual logic to fetch reports

        return view('print_report', compact('reports'));
    }
}
