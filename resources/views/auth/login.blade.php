<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - QuickBits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center md:h-screen">
    <div class="flex h-screen-mobile flex-col justify-center items-center bg-[#F9F5F3] rounded-lg w-screen h-screen shadow-lg">
        <img src="/assets/logo.svg" class="w-[52px] h-[53px]" alt="">
        <!-- Right Panel -->
        <div class="flex md:items-center h-[620px] mt-5 rounded-lg justify-center bg-white px-4 md:p-6 py-6 w-full md:w-[425px]">
            <div class="md:w-[425px]">
                <div class="text-center">
                    <h2 class="text-[31px] text-black mb-2">Welcome to WPKitBucket!</h2>
                <p class="text-sm text-[#7D6665] mb-6">Nice to see you again.</p>
                </div>
                <div class="flex gap-2">
                    <button class="flex items-center gap-x-2 px-6 text-sm font-medium py-2 border rounded-lg text-gray-800 hover:bg-[#A68B85]">
                       <img src="/assets/login/github.svg" class="w-[14px] h-[14px]" alt="">
                        GitHub
                    </button>
                    
                    <button class="flex items-center gap-x-2 px-6 text-sm font-medium py-2 border rounded-lg text-gray-800 hover:bg-[#A68B85]">
                        <img src="/assets/login/gitlab.svg" class="w-[14px] h-[14px]" alt="">

                        GitLab
                    </button>
                
                    <button class="flex items-center gap-x-2 px-6 text-sm font-medium py-2 border rounded-lg text-gray-800 hover:bg-[#A68B85]">
                        <img src="/assets/login/gitbucket.svg" class="w-[14px] h-[14px]" alt="">

                        Bitbucket
                    </button>
                </div>
                <div class="flex w-full items-center space-x-5 my-4">
                    <hr class="flex-grow border-gray-300">
                    <span class="px-4 text-sm text-gray-500">or</span>
                    <hr class="flex-grow border-gray-300">
                </div>
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf


    
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#1C1819]">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="example@example.com" required class="mt-2 py-2 px-2 block w-full border-[#A68B85] border bg-[#F8FAFC] rounded-md shadow-sm">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-[#1C1819]">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="••••••••" required class="mt-2 py-2 px-2 block w-full border-[#A68B85] border bg-[#F8FAFC] rounded-md shadow-sm">
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        @if (Route::has('password.request'))
                            <a class="text-[#0B4E2B]" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot your password?') }}</small>
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-6 bg-[#1C1819] text-white py-2 px-4 rounded-md font-medium hover:bg-blue-700">Sign in</button>
                    
                </form>
                <!-- Google Sign-in Button -->
                <p class="text-center text-[#1F4B43] hover:underline text-sm mt-5">
                    <a href="{{ route('register.form') }}">Sign Up For An Account</a>
                </p>
                <p class="text-sm mt-6 text-[#7D6665]">This site is protected by reCAPTCHA and the Google
                     Privacy Policy and Terms of Service apply</p>
            </div>
        </div>
    </div>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Scheherazade+New:wght@400;500;600;700&display=swap');

@media (max-height: 675px) {
    .h-screen-mobile {
      height: 100%;
    }
  }
  *{
    font-family: "Scheherazade New", serif;
}
    </style>
    
</body>

</html>
