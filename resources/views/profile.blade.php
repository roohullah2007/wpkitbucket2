@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row gap-6 w-screen bg-gray-100">  
    <!-- Profile Details -->
    <div class="w-full bg-white shadow rounded-lg p-8 px-20">
      <div>
        <h3 class="text-xl text-black font-semibold mb-4">Profile & Team</h3>
        <div class="flex border-y-2 border-[#D2D2D2] py-5 relative mb-6 space-x-6 text-gray-700">
          <a href="#" class="relative text-base font-medium text-black">
              Profile
              <span class="absolute left-0 -bottom-5 w-full h-[2px] bg-blue-600"></span>
            </a>
            <a href="#" class="text-[#8C8C8C] text-base hover:text-black">Team Members</a>
          </div>
          <h3 class="text-lg text-[#292B2D] border-b-2 border-[#E8E8E8] font-semibold pb-3">Profile Details</h3>
        </div>
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="relative w-[100px] h-[100px] mt-6 rounded-full overflow-hidden border-2 border-[#3253FF]">
            <img
                id="profileImage"
                src="{{ asset('storage/' . $user->profile_picture ?? 'assets/profile.png') }}"
                alt="Profile Picture"
                class="object-cover w-full h-full cursor-pointer"
                onclick="document.getElementById('profilePictureInput').click()" 
            />
            
            <!-- Hidden file input to select the image -->
            <input
                type="file"
                name="profile_picture"
                id="profilePictureInput"
                class="hidden"
                accept="image/*"
                onchange="previewImage(event)"
            />
        </div>
  
      <!-- Personal Info -->
      <div class="mt-6 md:w-[797px] md:h-[485px]">
     
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3">
            <div>
              <label class="text-base font-medium text-gray-600 mb-1 mt-3 block">Full Name*</label>
              <input
                type="text"
                name="name"
               value="{{ $user->name }}"
                class="w-full px-4 py-[10px] border-2 border-[#D2D2D2] rounded-lg focus:outline-[#387AF2]"
              />
            </div>
            <div>
                <label class="text-base font-medium text-gray-600 mb-1 mt-3 block">Email*</label>
                <div class="flex pr-2 items-center w-full rounded-md overflow-hidden">
                    <input
                        type="email"
                        id="emailInput"
                        name="email"
                        value="{{ auth()->user()->email }}"
                        class="w-full px-4 py-[10px] border-2 rounded-r-none border-[#D2D2D2] rounded-lg focus:outline-[#387AF2]"
                    />
                    <button
                        type="submit"
                        class="w-[50%] text-base rounded-lg rounded-l-none text-[#3253FF] py-[10px] border-l-0 border-2 border-[#D2D2D2]"
                    >
                        Change Email
                    </button>
                </div>        
            </div>
            <div>
              <label class="text-base font-medium text-gray-600 mb-1 mt-3 block">
                Current Password
              </label>
              <div class="relative">
                <input
                  type="password"
                  name="current_password"
                  id="current_password"
                  class="w-full px-4 py-[10px] border-2 border-[#D2D2D2] rounded-lg focus:outline-[#387AF2] pr-10"
                />
                <button type="button" onclick="togglePassword('current_password', 'toggle_current')" class="absolute inset-y-0 right-3 flex items-center">
                  <img src="/assets/profile-access/unhide-pass.svg" alt="">
                </button>
              </div>
            </div>
            
            <div>
              <label class="text-base font-medium text-gray-600 mb-1 mt-3 block">New Password</label>
              <div class="relative">
                <input
                  type="password"
                  name="password"
                  id="new_password"
                  class="w-full px-4 py-[10px] border-2 border-[#D2D2D2] rounded-lg focus:outline-[#387AF2] pr-10"
                />
                <button type="button" onclick="togglePassword('new_password', 'toggle_new')" class="absolute inset-y-0 right-3 flex items-center">
                  <img src="/assets/profile-access/unhide-pass.svg" alt="">
                </button>
              </div>
            </div>

            
          </div>
          <div>
            <label class="text-base font-medium  text-gray-600  mb-1 mt-3 block">Country</label>
            <select name="country" class="w-full px-3 py-[10px] border-2 border-[#D2D2D2] rounded-lg focus:outline-[#3253FF]">
              <option>Pakistan</option>
            </select>
          </div>
          <div class="flex gap-4 mt-6">
            <button
              type="button"
              class="px-4 py-2 border-2 border-[#D2D2D2] bg-white text-[#3253FF] rounded-lg"
            >
              Back To Home
            </button>
            <button
              type="submit"
              class="px-4 py-2 bg-[#3253FF] text-white rounded-lg"
            >
              Update Profile
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script>
    function previewImage(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('profileImage').src = e.target.result; // Update the profile image with the selected one
        };
        reader.readAsDataURL(file);
      }
    }
    function togglePassword(inputId, iconId) {
                let input = document.getElementById(inputId);
                if (input.type === "password") {
                  input.type = "text";
                } else {
                  input.type = "password";
                }
              }

  </script>
  
@endsection
