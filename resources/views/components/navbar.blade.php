<nav class="bg-[#1C1819] z-20 md:fixed w-screen">
  <div class=" flex items-center justify-between px-4 md:pl-4 pr-8 py-1">
    <div class="flex items-center space-x-6">
          <!-- Logo Section -->
    <a href="/" class="flex items-center space-x-2">
      <img src="/assets/white-logo.svg" alt="Logo" class="w-[41px] h-[42px]" />
    </a>
          {{-- Nav Links --}}
          <div class="md:flex text-sm hidden space-x-6 text-white">
            <a href="#" class="relative font-medium text-white">
                Hosted Sites
                <span class="absolute left-0 -bottom-4 w-full h-[2px] bg-blue-600"></span>
            </a>
            <a href="{{route('licences')}}" class="hover:text-white">Licenses</a>
            <a href="#" class="hover:text-white">Requests</a>
            <a href="{{route('templates')}}" class="hover:text-white">Templates</a>
            <a href="#" class="hover:text-white">Marketplace</a>
            <a href="#" class="hover:text-white">Billing</a>
        </div>
    </div>

    <!-- Right Side Buttons -->
    <div class="ml-1 flex items-center md:space-x-6 space-x-2">
              {{-- Refer & Earn Button --}}
              <button class="flex items-center px-2 md:px-4 py-[2.5px] border bg-white border-gray-300 rounded-full hover:bg-gray-100">
                <span class="mr-2 font-semibold md:text-[14px] text-[8px]">Refer & Earn</span>
                <img src="/assets/icon/key.svg" class="md:w-6 w-3 h-3 md:h-6" />
            </button>
      <!-- Get Help Button -->
      <a href="{{route('help')}}" class="text-white space-x-2 flex items-center justify-center hover:text-white">
        <img src="/assets/icon/notification.svg" class="w-[31px] h-[31px]" alt="">
      </a>

      <!-- Hamburger Icon (Visible on Mobile) -->
      <button id="hamburger-icon" class="text-white sm:hidden">
        <img src="/assets/hamburger.svg" alt="Hamburger" class="w-8 h-8" />
      </button>

      <div class="relative flex items-center space-x-2">
        <!-- Avatar Button -->
        <a href="#" id="avatarButton" class="relative ">
            <img 
                src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : '/assets/default-avatar.png' }}" 
                alt="Avatar" 
                class="w-[34px] h-[34px] border-white border rounded-full cursor-pointer" 
            />
        </a>
        <div class="text-white">
            <p class="text-[10px] md:text-[14px] font-semibold">{{ auth()->user()->name }}</p>
            <p class="text-[10px] md:text-[12px]">Your Profile</p>
        </div>
    
        <!-- Dropdown Menu -->
        <div id="dropdownMenu" class="hidden absolute right-0 top-full mt-2 w-60 bg-white rounded-lg shadow-lg transition-all duration-300 ease-in-out opacity-0 transform scale-95">
            <a href="{{ route('profile.edit') }}" class="flex items-center py-3 px-4">
                <!-- Avatar Container -->
                <div class="w-10 h-10 flex-shrink-0">
                    <img 
                        src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : '/assets/default-avatar.png' }}" 
                        alt="Avatar" 
                        class="w-full h-full object-cover rounded-full" 
                    />
                </div>
                <!-- User Details -->
                <div class="px-4">
                    <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                </div>
            </a>
            <hr class="border-gray-200">
            <ul class="py-1 space-y-2">
                <li><a href="{{ route('profile.edit') }}" class="flex border-b items-center px-4 py-2 hover:bg-gray-100"><img class="mr-3 w-4 h-4" src="/assets/icon/user.svg" alt="">Profile Settings</a></li>
                <li><a href="/company-profile" class="flex border-b items-center px-4 py-2 hover:bg-gray-100"><img class="mr-3 w-4 h-4" src="/assets/icon/home.svg" alt="">Company Profile</a></li>
                <li><a href="{{ route('account-sharing') }}" class="flex border-b items-center px-4 py-2 hover:bg-gray-100"><img class="mr-3 w-4 h-4" src="/assets/icon/user-plus.svg" alt="">Invite Colleagues</a></li>
                <li><a href="/support" class="flex border-b items-center px-4 py-2 hover:bg-gray-100"><img class="mr-3 w-4 h-4" src="/assets/icon/help-circle.svg" alt="">Support</a></li>
                <li>
                    <a href="{{ route('logout') }}" 
                       class="flex border-b items-center px-4 py-2 text-red-500 hover:bg-gray-100"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       <img class="mr-3 w-4 h-4" src="/assets/icon/log-out.svg" alt=""> Log out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    
    
      
    </div>
  </div>
</nav>

<!-- Sidebar (Initially Hidden) -->
<aside id="sidebar" class="fixed z-50 left-[-100%] top-[75px] bottom-0 text-white transition-all duration-300 ease-in-out">
  <div class="flex flex-col h-screen bg-[#23242e] border-r shadow-md w-[84px]">
    <div class="flex flex-col space-y-6 mt-4 text-center">
      <div class="flex space-y-2 mt-4 border-l-4 border-blue-500 items-center flex-col justify-center">
        <img src="/assets/frame.svg" class="w-6 h-6" alt="">
        <span class="text-blue-500 text-[14px] font-bold">Look</span>
      </div>
      <div class="flex space-y-2 mt-4 flex-col items-center">
        <img src="/assets/site.svg" class="w-6 h-6" alt="">
        <span class="text-xs text-[14px] font-medium text-gray-500">Sites</span>
      </div>
      <div class="flex space-y-2 mt-4 flex-col items-center">
        <img src="/assets/shop.png" class="w-6 h-6" alt="">
        <span class="text-xs text-[14px] font-medium text-gray-500">Shop</span>
      </div>
      <div class="flex space-y-2 mt-4 flex-col items-center">
        <img src="/assets/support.png" class="w-6 h-6" alt="">
        <span class="text-xs text-[14px] font-medium text-gray-500">Support</span>
      </div>
      <div class="flex space-y-2 mt-4 flex-col items-center">
        <img src="/assets/billing.svg" class="w-6 h-6" alt="">
        <span class="text-xs text-[14px] font-medium text-gray-500">Billing</span>
      </div>
    </div>
  </div>
</aside>

<!-- Mobile Search Bar (Visible when toggled) -->
<div id="mobile-search-bar" class="sm:hidden relative px-1 py-2 hidden">
  <input type="text" placeholder="Search..." class="w-full px-3 py-2 border border-[#A5A5A5] rounded-md bg-white text-white placeholder-[#A5A5A5] focus:outline-none focus:ring focus:ring-gray-400" />
</div>

<!-- JavaScript to Toggle Sidebar and Search Bar -->
<script>
 document.addEventListener("DOMContentLoaded", function () {
    const avatarButton = document.getElementById("avatarButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    if (avatarButton && dropdownMenu) {
        avatarButton.addEventListener("click", (event) => {
            event.preventDefault();
            dropdownMenu.classList.toggle("hidden");
            dropdownMenu.classList.toggle("opacity-0");
            dropdownMenu.classList.toggle("scale-95");
        });

        document.addEventListener("click", (event) => {
            if (!avatarButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden", "opacity-0", "scale-95");
            }
        });
    }
});

</script>

