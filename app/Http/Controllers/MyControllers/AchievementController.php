<?php
namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        // Retrieve all achievements for the currently authenticated user
        $achievements = auth()->user()->achievements;

        return view('achievements.index', compact('achievements'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
}
