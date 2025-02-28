@extends('layouts.app')

@section('content')
<div class="w-screen relative flex px-4 md:p-8 items-center justify-center flex-col">
  <!-- Header -->
 <div class="absolute left-16 top-10">
  <a href="{{route('account-sharing')}}" class="text-gray-600 hover:text-gray-900">
    <!-- Back Button Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
 </div>
<div class="flex flex-col items-center w-full space-x-2 text-gray-700">
  <h1 class="text-lg font-semibold">Request access</h1>
  <h4 class="block text-sm font-medium text-gray-700 mb-1">Who do you request access from?</h4>
</div>
<div class="flex items-center justify-center p-4">
    <div class="max-w-4xl flex items-center justify-center bg-white rounded-lg h-[669px] shadow-lg p-8 space-y-12">
  
      <!-- Form -->
      <form action="#" class="space-y-4">
        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Who do you request access from?</label>

        <!-- Email Input -->
        <div>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:ring-purple-500 focus:border-purple-500"
            placeholder="Email address"
          />
        </div>
  
        <!-- Permission Roles -->
        <div class="space-y-4" id="role-container">
          <!-- Option 1 -->
          <div
            class="flex items-center py-5 rounded-lg px-5 border-2 border-gray-600 space-x-3 role-option"
            data-role="admin"
          >
            <input
              type="radio"
              id="admin"
              name="role"
              class="h-5 w-5 text-purple-600 focus:ring-purple-500 border-gray-300"
            />
            <label for="admin" class="cursor-pointer text-sm text-gray-700 w-full">
              <span class="font-semibold">Admin</span>
              <br />
              <span class="text-gray-500 text-xs">
                Manage services and make purchases using added payment method.
              </span>
            </label>
          </div>
        
          <!-- Option 2 -->
          <div
            class="flex items-center py-5 rounded-lg px-5 border-2 border-gray-600 space-x-3 role-option"
            data-role="user"
          >
            <input
              type="radio"
              id="user"
              name="role"
              class="h-5 w-5 text-purple-600 focus:ring-purple-500 border-gray-300"
            />
            <label for="user" class="cursor-pointer text-sm text-gray-700 w-full">
              <span class="font-semibold">User</span>
              <br />
              <span class="text-gray-500 text-xs">
                Access basic features and make purchases using added payment method.
              </span>
            </label>
          </div>
        </div>
        

        
  
        <!-- Hosting Plan -->
        <div class="p-4 bg-gray-100 rounded-lg space-y-8">
          <p class="text-sm font-medium text-gray-700">Are they new to Hostinger?</p>
          <p class="text-sm text-gray-500">
            Choose a hosting plan for your client who doesn't have an account and add it to this request. You earn commission and your referral will get a
            <span class="text-purple-600 font-semibold">20% discount</span> too.
          </p>
          <a href="#" class="text-sm text-purple-600 font-medium hover:underline">Add hosting plan</a>
        </div>
  
        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full bg-purple-600 text-white font-medium text-sm py-2 px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"
        >
          Send request
        </button>
      </form>
    </div>
  </div>
</div>
  
<script>
  // Get all role options and the container
  const roleOptions = document.querySelectorAll('.role-option');

  // Add click event to each role option
  roleOptions.forEach((option) => {
    const radioInput = option.querySelector('input[type="radio"]');

    // Add a change event to the radio button
    radioInput.addEventListener('change', () => {
      // Reset all borders to gray
      roleOptions.forEach((opt) => opt.classList.remove('border-purple-700'));
      roleOptions.forEach((opt) => opt.classList.add('border-gray-600'));

      // Set the selected option's border to purple
      if (radioInput.checked) {
        option.classList.remove('border-gray-600');
        option.classList.add('border-purple-700');
      }
    });
  });
</script>
  
  
@endsection
