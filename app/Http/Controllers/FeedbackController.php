<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        // Validate and store the feedback
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'attending_staff' => 'required|string|max:255',
            'request' => 'required|string|max:255',
            'date_of_request' => 'required|date',
            'client_office' => 'required|string|max:255',
            'concerned_office' => 'required|string|max:255',
            'courtesy' => 'required|integer|between:1,5',
            'quality' => 'required|integer|between:1,5',
            'timeliness' => 'required|integer|between:1,5',
            'efficiency' => 'required|integer|between:1,5',
            'comments' => 'nullable|string|max:1000',
        ]);

        // Store the feedback (this is just an example, you might want to save it to a database)
        Feedback::create($validated);

        return redirect()->route('feedback.create')->with('success', 'Feedback submitted successfully!');
    }
}
