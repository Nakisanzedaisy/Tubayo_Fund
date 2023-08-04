<?php
namespace App\Http\Controllers;

use App\Models\SavingsCalculator;
use Illuminate\Http\Request;

class SavingsCalculatorController extends Controller
{
    public function index()
    {
        // Retrieve all savings calculator records for the currently authenticated user
        $calculations = auth()->user()->savingsCalculator;

        return view('savings_calculator.index', compact('calculations'));
    }

    public function create()
    {
        // Show the savings calculator form for the user to input their data
        return view('savings_calculator.create');
    }

    public function store(Request $request)
    {
        // Validate the form data and save the savings calculator input to the database
        $request->validate([
            'initial_amount' => 'required|numeric|min:0',
            'monthly_deposit' => 'required|numeric|min:0',
            'annual_interest_rate' => 'required|numeric|min:0',
            'investment_duration_months' => 'required|integer|min:1',
        ]);

        auth()->user()->savingsCalculator()->create($request->all());

        return redirect()->route('savings_calculator.index')->with('success', 'Savings calculator data saved successfully!');
    }

    // Add more methods as needed (e.g., edit, update, destroy)
}
