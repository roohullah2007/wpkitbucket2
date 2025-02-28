<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-password - QuickBits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center md:h-screen bg-gray-100">
    <div class="flex h-screen-mobile flex-col-reverse justify-between md:justify-center md:flex-row bg-white rounded-lg w-screen h-screen shadow-lg">
        <!-- Left Panel -->
        <div class="flex flex-col justify-center items-center w-screen md:w-[47vw] bg-cover text-white py-12 px-4 md:p-8" style="background-image: url('/assets/login/bg.jpg')">
            <div class="md:w-[502px] md:space-y-52">
                <div class="md:mt-10">
                    <h1 class="md:text-[46px] font-semibold mb-4">Forgot your password?</h1>
                    <p class="text-lg leading-relaxed">
                        Reset your password to regain access to your account. Simply provide your email, and we’ll send you a reset link.
                    </p>
                </div>
                <div class="hidden md:flex flex-col mt-8">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400 text-3xl">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                    </div>
                    <p class="font-extralight italic text-[19px]">"Quick and reliable service for all your hosting needs."</p>
                    <div class="flex items-center space-x-5 mt-2">
                        <img src="/assets/login/avatar.svg" alt="">
                        <div>
                            <p class="mt-2 text-sm font-bold">- Jane Doe</p>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="flex md:items-center justify-center px-4 py-6 md:p-8 md:px-24 w-full md:w-[55vw]">
            <div class="md:w-[528px] md:mt-10">
                <h2 class="text-[35px] font-semibold mb-2">Forgot Your Password?</h2>
                <p class="text-lg text-gray-600 mb-6">Enter your email below to receive a password reset link.</p>

                @if (session('status'))
                    <div class="text-green-600 mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Password Reset Form -->
                <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" required autofocus class="mt-3 py-4 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-md font-medium hover:bg-blue-700">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </form>

                <!-- Back to Login Link -->
                <p class="text-center text-sm text-gray-600 mt-6">
                    Remember your password? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login here</a>
                </p>
            </div>
        </div>
    </div>

    <style>
        @media (max-height: 675px) {
            .h-screen-mobile {
                height: 100%;
            }
        }
    </style>
</body>
</html>