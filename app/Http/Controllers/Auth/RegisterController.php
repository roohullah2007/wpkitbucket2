<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Display the registration form
    public function showRegistrationForm()
    {
        return view('auth.register'); // Ensure this matches your view file
    }

    // Handle registration submission
    public function register(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'country' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        // Create the user
        User::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'country' => $request->country,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login or dashboard after registration
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}

