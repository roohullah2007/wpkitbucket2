@extends('layouts.app')

@section('content')
    <div class="mx-auto px-4 w-screen md:px-20 h-screen">
        <!-- Header Section -->
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Title -->
                <h1 class="text-[16px] md:text-[24px] font-semibold text-gray-800 mb-3">Licenses</h1>
                <div class="flex pb-3 items-center space-x-2">
                    <button class="flex bg-white items-center space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 py-[6px] border-2 border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                       <img src="/assets/icon/cloud.svg" class="h-6 w-6" alt="">
                        <span>Backup Restore</span>
                    </button>
                    <button class="flex items-center hover:bg-gray-700 space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 bg-black py-[6px] border border-gray-300 rounded-lg text-white">
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
                <!-- Licence List -->
  <div class="space-y-3">
    <div class="border-2 rounded-lg px-4 py-2 bg-white flex items-center justify-between border-[#DCDCDC] ">
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-3">
                <img src="/assets/Licence-icons/elementor.png" alt="">
                    <h1 class="text-blue-600 font-semibold text-sm">Elementor Pro</h1>

            </div>
        </div>

        <div class="flex items-center space-x-16 w-[688px]">

            <div class=" w-[168px] py-[1px] space-x-1  flex  rounded-full">
                <img src="/assets/Licence-icons/date.svg" class="w-[25px] h-[25px]" alt="">
                <span class="text-sm font-semibold">24th August 2026</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
                <img src="/assets/Licence-icons/price.svg" class="w-[25px] h-[25px]" alt="">
                <span class="text-green-500 text-sm font-semibold">$7.99</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
            <span class="text-gray-500 text-sm font-semibold">xyzcomp.fr</span>
                </div>

                <button class="w-[120px] justify-center py-2 border-2 border-[#DCDCDC] text-gray-800 font-medium text-sm rounded-lg hover:bg-gray-300 flex items-center">
                    Get Support
                </button>
        </div>
    </div>
    {{-- licence-2  --}}
        <div class="border-2 rounded-lg px-4 bg-white py-3 flex items-center justify-between border-[#DCDCDC] ">
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-3">
                <img src="/assets/Licence-icons/elementor.png" alt="">
                    <h1 class="text-blue-600 font-semibold text-sm">Elementor Pro</h1>

            </div>
        </div>

        <div class="flex items-center space-x-16 w-[688px]">

            <div class=" w-[168px] py-[1px] space-x-1  flex  rounded-full">
                <img src="/assets/Licence-icons/expired.svg" class="w-[25px] h-[25px]" alt="">
                <span class="text-sm font-semibold">Expired</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
                <img src="/assets/Licence-icons/price.svg" class="w-[25px] h-[25px]" alt="">
                <span class="text-green-500 text-sm font-semibold">$7.99</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
            <span class="text-gray-500 text-sm font-semibold">xyzcomp.fr</span>
                </div>

                <button class="w-[120px] justify-center py-2 border-2 border-[#DCDCDC] text-gray-800 font-medium text-sm rounded-lg hover:bg-gray-300 flex items-center">
                    Renew
                </button>
        </div>
    </div>
  </div>
    </div>
@endsection