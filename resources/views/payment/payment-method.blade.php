@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 space-y-4 w-screen md:px-24 h-screen py-6">
        <!-- Header -->
        <div class="flex justify-between items-center border-b-2 border-[#DCDCDC] pb-3">
            <h2 class="text-xl text-black font-semibold">Payment Methods</h2>
            <button class="text-[#828282] flex items-center justify-center space-x-2 border-2 border-[#DCDCDC] text-base font-medium px-5 py-2 rounded-md">
                WPKitBucket balance: <span class="ml-2 text-base text-black font-bold">$0.00</span>
                    <img src="/assets/payment-history/question-circle.svg" class="w-5 h-5" alt="">
            </button>
        </div>
    
        <!-- Notification -->
        <div class="flex border-2 border-[#DCDCDC] items-center justify-between px-4 py-2 rounded-lg">
                <div class="flex">
                    <img src="/assets/payment-history/tick-circle.svg" alt="">
                    <span class="ml-2 text-base text-black">You have 1 active payment method</span>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Payment Method
                </button>
        </div>
    
    
        <!-- Payment Method Card -->
        <div class="border-2 border-[#DCDCDC] rounded-lg overflow-hidden shadow-sm">
            <div class="p-4 border-b-2 border-[#DCDCDC]">
                <h3 class="text-xl font-semibold">Payment method list</h3>
            </div>
            <div class="p-4 flex justify-between items-center">
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <span class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">VISA</span>
                        <span class="font-semibold text-gray-800 text-base">1234 4568 5485 124</span>
                    </div>
                    <div class="flex space-x-2">
                        <p class="text-[#5A5A5A] text-sm">Credit Card via Stripe  <span class="px-1">|</span>  Expires 2028-05</p>
                    <button class="bg-[#F2F3F6] text-xs text-[#323232] px-2 py-1 rounded">DEFAULT METHOD</button>
                    </div>
                </div>
                <button>
                    <img src="/assets/payment-history/next.svg" alt="Details">

                </button>
            </div>
        </div>
    
  </div>
  @endsection
