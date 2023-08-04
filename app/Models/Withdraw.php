<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    //use HasFactory;
    
    protected $fillable = ['amount', 'status', 'transaction_date'];

    // Define relationships if necessary, e.g., with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

