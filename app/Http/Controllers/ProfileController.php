<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
   // Show the user's profile form
public function edit(Request $request)
{
    // Get the authenticated user
    $user = $request->user();

    // Return the view with the user data
    return view('profile', compact('user'));
}


public function update(Request $request)
{
    // Validate the input, including the image upload
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . auth()->user()->id,
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Max size of 2MB
        'current_password' => 'nullable|string|min:6',
        'password' => 'nullable|string|min:6|confirmed',
        'country' => 'nullable|string|max:255',
    ]);

    // Find the authenticated user
    $user = auth()->user();

    // Handle image upload if a new image is provided
    if ($request->hasFile('profile_picture')) {
        $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        // Delete old image if exists
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }
        $user->profile_picture = $imagePath; // Save the new image path to the database
    }

    // Update other user details
    $user->name = $validated['name'];
    $user->email = $validated['email'];

    // Check if password needs to be updated
    if ($request->filled('current_password') && $request->filled('password')) {
        if (Hash::check($validated['current_password'], $user->password)) {
            $user->password = Hash::make($validated['password']);
        } else {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
    }

    // Update the user record in the database
    $user->save();

    // Redirect back with a success message
    return back()->with('success', 'Profile updated successfully!');
}


}
