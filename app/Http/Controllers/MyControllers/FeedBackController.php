<?php
// namespace App\Http\Controllers;

// use App\Models\Feedback;
// use Illuminate\Http\Request;

// class FeedbackController extends Controller
// {
//     public function index()
//     {
//         // Retrieve all feedback messages
//         $feedback = Feedback::all();

//         return view('feedback.index', compact('feedback'));
//     }

//     // Add more methods as needed (e.g., create, store, edit, update, destroy)
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            //'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save the feedback to the database or perform any other actions
        // For example, you can create a Feedback model and save the data there

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
