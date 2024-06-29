<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');

    }

    public function print()
    {
        // Logic to fetch data for printing report (if any)
        $data = []; // Replace with actual data fetching logic if needed

        return view('print_report', ['data' => $data]);
    }
}
