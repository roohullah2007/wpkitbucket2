<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - WPKitBucket</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center md:h-screen bg-gray-100">
    <div class="flex h-screen-mobile flex-col-reverse justify-between md:justify-center md:flex-row bg-white rounded-lg w-screen md:h-screen shadow-lg">
        <!-- Left Panel -->
        <div class="flexflex-col justify-center items-center w-screen md:w-[47vw] bg-cover text-white py-12 px-4 md:p-8" style="background-image: url(/assets/login/bg.jpg)">
            <div class="md:w-[502px] md:space-y-52">
                <div class="md:mt-10">
                    <h1 class="md:text-[46px] font-semibold mb-4">Join WPKitBucket</h1>
                    <p class="text-lg leading-relaxed">Experience managed hosting services for WordPress with exclusive features designed to meet your needs.</p>
                </div>
                <div class="hidden md:flex flex-col mt-8">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400 text-3xl">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                    </div>
                    <p class="font-extralight italic text-[19px]">"WPKitBucket is fantastic! The tools and support made our projects effortless."</p>
                    <div class="flex items-center space-x-5 mt-2">
                        <img src="/assets/login/avatar.svg" alt="">
                        <div>
                            <p class="mt-2 text-sm font-bold">- Devon Lane</p>
                            <p>Co-Founder, Design.co</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="flex md:items-center justify-center px-4 py-6 md:p-8 md:px-24 w-full md:w-[55vw]">
            <div class="md:w-[528px] md:py-5">
                <h2 class="text-[35px] font-semibold mb-2">Create Your Account</h2>
                <p class="text-lg text-gray-600 mb-6">Join WPKitBucket for a seamless WordPress hosting experience.</p>

                <!-- Sign Up Form -->
                <form method="POST" action="{{ route('register.form') }}" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm" value="{{ old('dob') }}">
                        @error('dob')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <select id="country" name="country" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm">
                            <option value="" disabled selected>Select your country</option>
                            <option value="United States">United States</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Australia">Australia</option>
                        </select>
                        @error('country')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="example@example.com" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required class="mt-2 py-2 px-2 block w-full border-gray-300 border bg-[#F8FAFC] rounded-md shadow-sm">
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sign Up Button -->
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition">Sign Up</button>
                </form>
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
