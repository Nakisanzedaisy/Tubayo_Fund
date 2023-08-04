<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        //'savings_account_id',
        'user_id',
        'amount',
        'status',
        'mode_of_payment',
        'proof_of_payment',
    ];

    // Define the relationship with the SavingsAccount model
    public function savingsAccount()
    {
        return $this->belongsTo(SavingsAccount::class);
    }
}
