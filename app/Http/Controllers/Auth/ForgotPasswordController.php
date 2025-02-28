<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Show the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password'); // Ensure this view exists
    }

    /**
     * Handle a request to send a password reset link to the user.
     *
     * @param  \App\Http\Requests\Auth\ForgotPasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        // Attempt to send the password reset link
        $status = Password::sendResetLink(
            $request->only('email') // Extract only the email from the request
        );

        // Check the status and respond accordingly
        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', trans($status))
            : back()->withErrors(['email' => trans($status)]);
    }
}
