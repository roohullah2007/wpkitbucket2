@extends('layouts.app')

@section('content')
    <div class="w-screen max-w-7xl mx-auto h-screen py-6 px-4">
    <!-- Header -->
    <div class="flex space-x-5 items-center">
      <h1 class="text-xl font-bold text-gray-800">Account Sharing</h1>
      <nav class="text-sm flex items-center text-[#6D7081] mt-1"> <svg data-v-fbff51d6="" fill="#6D7081" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="icon-home" focusable="false" viewBox="0 0 24 24" class="icon-static-view-box mr-2 h-icon" width="20" height="20"><!----><g data-v-fbff51d6=""><path data-v-fbff51d6="" fill-rule="evenodd" clip-rule="evenodd" d="M10 20V14H14V20H19V12H22L12 3L2 12H5V20H10Z"></path></g></svg> - Profile - Account Sharing</nav>
    </div>
  
    <div class="mt-6 w-full bg-white rounded-lg border shadow p-6">
      <!-- Tabs -->
      <div class="flex border-b border-gray-200">
          <button id="tab-1" class="text-[#3B82F6] font-medium px-4 py-2 border-b-2 border-[#3B82F6] focus:outline-none active-tab">
              Request access
          </button>
          <button id="tab-2" class="text-gray-600 font-medium px-4 py-2 focus:outline-none">
              Grant access
          </button>
      </div>
  
      <!-- Content -->
      <div class="mt-4" id="content-1">
          <p class="text-sm text-gray-600">
              Choose this option if there is another Hostinger account you would like to manage. A request email will be sent to the email address.
          </p>
          <div class="mt-4">
              <a href="{{route('request-access')}}" class="mt-4 px-4 py-2 bg-[#3B82F6] text-white rounded-md text-sm hover:bg-[#3B82F6] focus:outline-none">
                  Request access
              </a>
          </div>
      </div>
  
      <div class="mt-4 hidden" id="content-2">
          <p class="text-sm text-gray-600">
              Choose this option if you want to grant access to another user.
          </p>
          <div class="mt-4">
              <a href="{{route('grant-access')}}" class="mt-4 px-4 py-2 bg-[#3B82F6] text-white rounded-md text-sm hover:bg-[#3B82F6] focus:outline-none">
                  Grant access
              </a>
          </div>
      </div>
  </div>
  
    <div>
        <div class="mt-6 w-full bg-white rounded-lg border shadow px-4 pt-3">
            <!-- Table Header -->
            <div class="grid grid-cols-4 gap-4 border-b px-6 py-3 text-gray-700 uppercase text-sm font-medium">
              <div class="text-sm text-[#1De1e20]">Email</div>
              <div class="text-sm text-[#1De1e20]">Access type</div>
              <div class="text-sm text-[#1De1e20]">Status</div>
              <div></div>
            </div>
          
            <!-- Table Body -->
            <div class="divide-y">
              <!-- Row -->
              <div class="grid grid-cols-4 gap-4 items-center px-6 py-4 hover:bg-gray-50">
                <div class="text-sm text-[#1D1e20]">handsonhomesllc@gmail.com</div>
                <div class="text-sm text-[#1D1e20]">Manage Services</div>
                <div class="flex items-center space-x-1">
                  <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 17.414l-4.707-4.707 1.414-1.414L10 14.586l7.293-7.293 1.414 1.414L10 17.414z"></path>
                  </svg>
                  <span class="text-sm text-[#1D1e20]">Active</span>
                </div>
                <div class="flex items-center space-x-4">
                  <button class="text-[#3B82F6] py-2 px-5 rounded-lg border font-medium hover:underline">
                    Manage services
                  </button>
                  <svg data-v-fbff51d6="" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="icon-more-vert" focusable="false" viewBox="0 0 24 24" class="icon-primary h-icon" fill="#3B82F6" width="20" height="20"><!----><g data-v-fbff51d6=""><path data-v-fbff51d6="" fill-rule="evenodd" clip-rule="evenodd" d="M12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"></path></g></svg>                </div>
              </div>
          
              <!-- Additional Rows -->
              <div class="grid grid-cols-4 gap-4 items-center px-6 py-4 hover:bg-gray-50">
                <div class="text-sm text-[#1D1e20]">aqmufti@hotmail.com</div>
                <div class="text-sm text-[#1D1e20]">Manage Services</div>
                <div class="flex items-center space-x-1">
                  <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 17.414l-4.707-4.707 1.414-1.414L10 14.586l7.293-7.293 1.414 1.414L10 17.414z"></path>
                  </svg>
                  <span class="text-sm text-[#1D1e20]">Active</span>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-[#3B82F6] py-2 px-5 rounded-lg border font-medium hover:underline">
                      Manage services
                    </button>
                    <svg data-v-fbff51d6="" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="icon-more-vert" focusable="false" viewBox="0 0 24 24" class="icon-primary h-icon" fill="#3B82F6" width="20" height="20"><!----><g data-v-fbff51d6=""><path data-v-fbff51d6="" fill-rule="evenodd" clip-rule="evenodd" d="M12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM12 16C10.9 16 10 16.9 10 18C10 19.1 10.9 20 12 20C13.1 20 14 19.1 14 18C14 16.9 13.1 16 12 16Z"></path></g></svg>                </div>
                </div>
              </div>
              <!-- Pagination -->
              <div class="flex items-center justify-between px-6 py-4 border-t">
                <div class="text-sm text-gray-500">
                  Items per page:
                  <select class="border rounded-md text-gray-700 p-1 focus:outline-none">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                  </select>
                </div>
                <div class="text-sm text-gray-500">
                  <span>1 - 5 of 42</span>
                </div>
                <div class="flex space-x-2">
                  <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="w-5 h-5" fill="#3B82F6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                    </svg>
                  </button>
                  <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="w-5 h-5" fill="#3B82F6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L12.17 12z"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          
          </div>
          
      </div>
  
      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tab1 = document.getElementById('tab-1');
            const tab2 = document.getElementById('tab-2');
            const content1 = document.getElementById('content-1');
            const content2 = document.getElementById('content-2');
    
            tab1.addEventListener('click', function () {
                tab1.classList.add('border-b-2', 'border-[#3B82F6]');
                tab2.classList.remove('border-b-2', 'border-[#3B82F6]');
                content1.classList.remove('hidden');
                content2.classList.add('hidden');
            });
    
            tab2.addEventListener('click', function () {
                tab2.classList.add('border-b-2', 'border-[#3B82F6]');
                tab1.classList.remove('border-b-2', 'border-[#3B82F6]');
                content2.classList.remove('hidden');
                content1.classList.add('hidden');
            });
        });
    </script>
    
  
@endsection
