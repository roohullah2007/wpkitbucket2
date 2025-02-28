@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen">
    <h2 class="text-xl border-b-2 border-[#E8E8E8] py-4 font-semibold mb-4">Manage Subscriptions</h2>
    
<!-- Tabs -->
<div class="flex space-x-5 border-b border-[#D2D2D2]">
  <a href="{{ route('subscription') }}" 
     class="py-2 text-base border-b-2 {{ request()->routeIs('subscription') ? 'text-blue-500 border-blue-500' : 'text-gray-500 border-transparent' }}">
      Subscriptions
  </a>
  <a href="{{ route('payment-history') }}" 
     class="py-2 text-base border-b-2 {{ request()->routeIs('payment-history') ? 'text-blue-500 border-blue-500' : 'text-gray-500 border-transparent' }}">
      Payment History
  </a>
  <a href="{{ route('refund-history') }}" 
     class="py-2 text-base border-b-2 {{ request()->routeIs('refund-history') ? 'text-blue-500 border-blue-500' : 'text-gray-500 border-transparent' }}">
      Refund History
  </a>
</div>

  
    <!-- Subscription List -->
    <div class="mt-4 space-y-3">
      
      <!-- Subscription Item -->
          <!-- Card 1 -->
          <a href="{{route('subscription-details')}}" class="flex justify-between border-2 border-[#DCDCDC] items-center p-4 bg-white rounded-lg">
            <div class="flex flex-col">
                <h3 class="text-base font-semibold text-black">.Nutech Domain - fastcardzyx.tech</h3>
                <p class="text-[#5A5A5A] text-[12px] ">1 year</p>
                <p class="text-black text-sm">ID: 15DFKD155DFKKD2D</p>
              </div>
    
              
              <div class="flex flex-col items-center">
                <p class="text-#[#5A5A5A] font-medium text-sm">Expiration Date</p>
                <p class="text-[#787878] text-sm">2025-05-07</p>
              </div>

              <div class="flex items-center space-x-1">
                  <img src="/assets/subscription/auto-renewel.svg" class="w-6 h-6" alt="">
                  <p class="text-[#787878] text-sm">Auto-renewal off</p>
              </div>
              
            <div class="flex items-center flex-col">
                <p class="text-black font-medium text-sm">Renewal Price</p>
                <p class="text-[#787878] text-sm">$122.21</p>
            </div> 
            <div class="flex">
                <button class="w-[120px] px-4 mr-4 py-1.5 text-sm font-medium text-blue-500 border-2 rounded-lg border-[#D2D2D2]">Renew Now</button>
            </div>
         </a>    
  
      <!-- Duplicate the above div for more subscriptions -->
      
    </div>
  </div>
  @endsection
