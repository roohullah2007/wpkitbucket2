<?php

namespace App\Http\Requests\Auth;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set to false if authorization is required
    }


    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            // Avoid throttle here if it's being added manually
        ];
    }
    
    
}
