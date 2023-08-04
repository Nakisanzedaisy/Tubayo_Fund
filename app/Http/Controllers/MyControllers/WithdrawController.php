<?php

namespace App\Http\Controllers;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function create()
    {
        // Add logic to display the withdrawal form
        return view('withdraw.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        // Save the withdrawal information to the database
        $withdraw = new Withdraw([
            'amount' => $request->input('amount'),
            'status' => 'pending', // Assuming the status is set to "pending" by default
            'transaction_date' => null, // Assuming the transaction_date is initially set to null
        ]);

        // Associate the withdrawal with the authenticated user (assuming you have user authentication set up)
        $withdraw->user_id = auth()->user()->id;

        $withdraw->save();

        // Redirect to a success page or return a success response
        return redirect()->route('dashboard.layouts.main')->with('success', 'Withdrawal request submitted successfully! We will process it soon.');
    }
}
