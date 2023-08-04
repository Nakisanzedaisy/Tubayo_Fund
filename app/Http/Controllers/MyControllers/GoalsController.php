<?php
namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        // Retrieve all goals for the currently authenticated user
        $goals = auth()->user()->goals;

        return view('goals.index', compact('goals'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
}

// goalController
// namespace App\Http\Controllers;

// use App\Models\Goal;
// use Illuminate\Http\Request;

// class GoalsController extends Controller
// {
    
//     public function index()
//     {
//         // Retrieve all goals for the currently authenticated user
//         $goals = auth()->user()->goals;

//         return view( 'goals.index', compact('goals'));
//     }

//     public function create()
//     {
//         // Show the form to create a new goal
//         return view('goals.create');
//     }

//     public function store(Request $request)
//     {
//         // Validate the form data and save the new goal to the database
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'required|string',
//             'target_amount' => 'required|numeric|min:0',
//             'target_date' => 'required|date',
//         ]);

//         auth()->user()->goals()->create($request->all());

//         return redirect()->route('goals.index')->with('success', 'Goal created successfully!');
//     }

//     public function edit(Goal $goal)
//     {
//         // Show the form to edit an existing goal
//         return view('goals.edit', compact('goal'));
//     }

//     public function update(Request $request, Goal $goal)
//     {
//         // Validate the form data and update the goal in the database
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'required|string',
//             'target_amount' => 'required|numeric|min:0',
//             'target_date' => 'required|date',
//         ]);

//         $goal->update($request->all());

//         return redirect()->route('goals.index')->with('success', 'Goal updated successfully!');
//     }

//     public function destroy(Goal $goal)
//     {
//         // Delete the goal from the database
//         $goal->delete();

//         return redirect()->route('goals.index')->with('success', 'Goal deleted successfully!');
//     }
// }
