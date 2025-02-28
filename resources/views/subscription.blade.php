@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen py-6">
    <h2 class="text-xl border-b border-gray-500 py-4 font-semibold mb-4">Manage Subscriptions</h2>
    
    <!-- Tabs -->
    <div class="flex space-x-5 border-b">
      <a href="{{route('subscription')}}" class="py-2 text-base text-blue-500 border-b-2 border-blue-500">Subscriptions</a>
      <a href="{{route('payment-history')}}" class="py-2 text-base text-gray-500">Payment History</a>
      <a href="{{route('refund-history')}}" class="py-2 text-base text-gray-500">Refund History</a>
    </div>
  
    <!-- Subscription List -->
    <div class="mt-4 space-y-3">
      
      <!-- Subscription Item -->
          <!-- Card 1 -->
          <div class="flex justify-between border-2 items-center p-4 bg-white rounded-lg">
            <div class="flex flex-col">
                <h3 class="text-base font-semibold text-gray-700">.Nutech Domain - fastcardzyx.tech</h3>
                <p class="text-gray-700 text-sm">1 year</p>
                <p class="text-gray-700 text-sm">ID: 15DFKD155DFKKD2D</p>
              </div>
    
            <div class="flex items-center space-x-1">
                <img src="/assets/subscription/auto-renewel.svg" alt="">
                <p class="text-gray-500 text-sm">Auto-renewal off</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-gray-500 text-sm">Expiration Date</p>
                <p class="text-gray-500 text-sm">2025-05-07</p>
            </div>
    
            <div class="flex items-center flex-col">
                <p class="text-gray-500 text-sm">Renewal Price</p>
                <p class="text-orange-500 text-sm">$122.21</p>
            </div> 
            <div class="flex">
                <button class="w-[120px] px-4 mr-4 py-2 text-sm font-medium text-blue-500 border-2 rounded-lg border-[#D2D2D2]">Renew Now</button>
            </div>
         </div>    
  
      <!-- Duplicate the above div for more subscriptions -->
      
    </div>
  </div>
  @endsection
