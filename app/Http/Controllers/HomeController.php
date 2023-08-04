<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();
        $first_name = $user->first_name;
        $last_name = $user->last_name;
        $profile_image = $user->profile_image;
    
    
        // Pass the user's name to the dashboard view
        //return view( 'dashboard', compact('first_name', 'last_name', 'profile_image'));
        return view('dashboard.layouts.main', compact('user'));


        //return view('dashboard', ['name' => $user->name]);

        //$user = Auth::user();
        //return view('dashboard.layouts.main');
    }
}
