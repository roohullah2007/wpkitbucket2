@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen">
      <div class="flex  items-center pb-2 mb-8 border-b-2 border-[#DCDCDC]">
        <a href="#" class="text-gray-500 flex items-center space-x-2 mb-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span>Back</span>
        </a>
        <h2 class="text-xl w-full flex items-center justify-center font-semibold text-center">Subscription Details</h2>
      </div>
    
    
        <div class="flex justify-between items-center pr-6 mb-4">
            <h3 class="text-lg font-semibold">Cloud Startup - noorik.com</h3>
            <a href="#" class="text-blue-500 hover:underline">Upgrade</a>
        </div>
    
        <div class="bg-white border-2 border-[#DCDCDC] shadow-md rounded-lg p-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
          <div class=" space-y-6">
            <p class="font-medium">Subscription ID</p>
            <p class="font-medium">Status</p>
            <p class="font-medium">Renewal Price</p>
            <p class="font-medium">Expiration Date</p>
            <p class="font-medium">Billing Period</p>

          </div>
          <div class=" space-y-6">
            <p class="text-gray-600">15DFKD155DFKKD2D</p>
        <div class="flex items-center space-x-1"><img src="/assets/subscription/auto-renewel.svg" class="w-6 h-6" alt=""><p class="text-[#787878] text-sm">Auto-renewal off</p></div>         
        <p class="text-gray-600">$251.55</p>
        <p class="text-gray-600">2025-08-25</p>
        <p class="text-gray-600">Annually (Pay Every 12 Months)</p>

          </div>
          <div>

          </div>
            </div>
    
            <div class="mt-6 border-t-2 pt-5 border-[#DCDCDC] flex justify-end space-x-4">
                <button class="px-4 py-2  border-2 border-[#DCDCDC] text-red-500 rounded-lg hover:bg-red-500 hover:text-white">
                    Disable auto-renewal
                </button>
                <button class="px-4 py-2  border-2 border-[#DCDCDC] text-gray-700 rounded-lg hover:bg-gray-100">
                    Renew Now
                </button>
            </div>
        </div>
    
  </div>
  @endsection
