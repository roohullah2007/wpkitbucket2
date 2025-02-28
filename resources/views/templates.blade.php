@extends('layouts.app')

@section('content')
    <div class="mx-auto px-4 w-screen md:px-20 h-screen">
        <!-- Header Section -->
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Title -->
                <h1 class="text-[16px] md:text-[24px] font-semibold text-gray-800 mb-3">Templates</h1>
                <div class="flex pb-3 items-center space-x-2">
                    <button class="flex items-center space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 py-[6px] border-2 border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                       <img src="/assets/icon/cloud.svg" class="h-6 w-6" alt="">
                        <span>Backup Restore</span>
                    </button>
                    <button class="flex items-center space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 bg-blue-600 py-[6px] border border-gray-300 rounded-lg text-white hover:bg-blue-700">
                       <img src="/assets/icon/add.svg" class="h-6 w-6" alt="">
                        <span>Add Website</span>
                    </button>
                </div>
            </div>
                <!-- Filter & Search -->
                <div class="flex border-y-2 py-3 border-[#DCDCDC] items-center space-x-4 mb-5">
                    <button class="flex items-center px-4 py-[5px] border-r-2 border-[#DCDCDC] text-gray-600 hover:bg-gray-100">
                     <img src="/assets/icon/filter.svg" alt="">
                        Filter
                    </button>
                    <input type="text" placeholder="Search..." class="w-72 px-4 py-[5px] border-2 rounded-lg border-[#DCDCDC]">
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-1">
                <!-- Image Card -->
                <div class="bg-white shadow space-y-1 rounded-md overflow-hidden">
                  <img src="/assets/templates/card-img.jpg" alt="Template Image" class="w-full h-[200px] object-cover">
                  <div class="flex px-2 pb-1 justify-between items-center">
                    <p class="text-black font-medium text-sm">Template name</p>
                    <button class="text-gray-500 hover:text-gray-700">
                      <img src="/assets/templates/download.svg" class="w-4 h-4" alt="">
                    </button>
                  </div>
                </div>
              
                <div class="bg-white shadow space-y-1 rounded-md overflow-hidden">
                  <img src="/assets/templates/card-img.jpg" alt="Template Image" class="w-full h-[200px] object-cover">
                  <div class="flex px-2 pb-1 justify-between items-center">
                    <p class="text-black font-medium text-sm">Template name</p>
                    <button class="text-gray-500 hover:text-gray-700">
                      <img src="/assets/templates/download.svg" class="w-4 h-4" alt="">
                    </button>
                  </div>
                </div>
              
                <div class="bg-white shadow space-y-1 rounded-md overflow-hidden">
                  <img src="/assets/templates/card-img.jpg" alt="Template Image" class="w-full h-[200px] object-cover">
                  <div class="flex px-2 pb-1 justify-between items-center">
                    <p class="text-black font-medium text-sm">Template name</p>
                    <button class="text-gray-500 hover:text-gray-700">
                      <img src="/assets/templates/download.svg" class="w-4 h-4" alt="">
                    </button>
                  </div>
                </div>
              
                <div class="bg-white shadow space-y-1 rounded-md overflow-hidden">
                  <img src="/assets/templates/card-img.jpg" alt="Template Image" class="w-full h-[200px] object-cover">
                  <div class="flex px-2 pb-1 justify-between items-center">
                    <p class="text-black font-medium text-sm">Template name</p>
                    <button class="text-gray-500 hover:text-gray-700">
                      <img src="/assets/templates/download.svg" class="w-4 h-4" alt="">
                    </button>
                  </div>
                </div>
              
              </div>
              
    </div>
@endsection
