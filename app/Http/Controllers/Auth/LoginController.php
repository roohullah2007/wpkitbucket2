<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check if the user exists with the provided email
        $user = User::where('email', $request->email)->first();

        // If the user doesn't exist
        if (!$user) {
            return back()->withErrors([
                'email' => 'The email address is not registered.',
            ]);
        }

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'password' => 'The provided password is incorrect.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the home page or login page
        return redirect('/');
    }
}
