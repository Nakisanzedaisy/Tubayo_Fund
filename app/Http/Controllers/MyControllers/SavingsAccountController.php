<?php
namespace App\Http\Controllers;

use App\Models\SavingsAccount;
use Illuminate\Http\Request;

class SavingsAccountController extends Controller
{
    public function index()
    {
        // Retrieve all savings accounts for the currently authenticated user
        $savingsAccounts = auth()->user()->savingsAccounts;

        return view('savings_accounts.index', compact('savingsAccounts'));
    }

    public function show(SavingsAccount $savingsAccount)
    {
        // Show details of a specific savings account
        return view('savings_accounts.show', compact('savingsAccount'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
}
