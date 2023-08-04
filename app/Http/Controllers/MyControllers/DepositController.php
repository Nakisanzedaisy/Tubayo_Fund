<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    //Existing methods
    
    public function show_transaction()
    {
        return view('process_deposit');
    }

    public function process(Request $request)
    {
        // Validate the form data
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'mode_of_payment' => 'required|string',
            //'mode_of_payment' => 'nullable|string|max:255',
            //'proof_of_payment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'savings_account_id' => 'required|exists:savings_accounts,id',
            'proof_of_payment' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Adjust mime types and max file size as needed
        ]);

        // Save the deposit information to the database or process it as needed
        // For example, you could save it to a "deposits" table in the database

        // Get the file and store it in a suitable location
        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('proof_of_payments', $filename); // Store the file in the "proof_of_payments" directory
        }

        // Redirect to a success page or return a success response
        return redirect()->route('dashboard.index')->with('success', 'Deposit successful! Thank you for your payment.');
    }
}

// namespace App\Http\Controllers;

// use App\Models\Deposit;
// use App\Models\SavingsAccount;
// use Illuminate\Http\Request;

// class DepositsController extends Controller
// {
//     // Existing methods...

//     public function store(Request $request)
//     {
//         $request->validate([
//             'savings_account_id' => 'required|exists:savings_accounts,id',
//             'amount' => 'required|numeric|min:0',
//             'mode_of_payment' => 'nullable|string|max:255',
//             'proof_of_payment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         if ($request->hasFile('proof_of_payment')) {
//             $proofOfPayment = $request->file('proof_of_payment');
//             $proofOfPaymentPath = $proofOfPayment->store('proof_of_payments', 'public');
//             $request->merge(['proof_of_payment' => $proofOfPaymentPath]);
//         }

//         Deposit::create($request->all());

//         return redirect()->route('savings_accounts.show', $request->savings_account_id)
//             ->with('success', 'Deposit added successfully!');
//     }

//     public function update(Request $request, Deposit $deposit)
//     {
//         $request->validate([
//             'amount' => 'required|numeric|min:0',
//             'mode_of_payment' => 'nullable|string|max:255',
//             'proof_of_payment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         if ($request->hasFile('proof_of_payment')) {
//             $proofOfPayment = $request->file('proof_of_payment');
//             $proofOfPaymentPath = $proofOfPayment->store('proof_of_payments', 'public');
//             $request->merge(['proof_of_payment' => $proofOfPaymentPath]);
//         }

//         $deposit->update($request->all());

//         return redirect()->route('savings_accounts.show', $deposit->savings_account_id)
//             ->with('success', 'Deposit updated successfully!');
//     }

//     // Existing methods...
// }
