<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // If authenticated, show the dashboard
            return view('welcome');
        } else {
            // If not authenticated, redirect to login
            return redirect()->route('login');
        }
    }
}
