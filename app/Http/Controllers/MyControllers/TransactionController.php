<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Retrieve all transactions for the currently authenticated user
        $transactions = auth()->user()->transactions;

        return view('transactions.index', compact('transactions'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
}
