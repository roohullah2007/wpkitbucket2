@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen py-6">
    <h2 class="text-xl border-b-2 border-[#E8E8E8] py-4 font-semibold mb-4">Payment-history</h2>
    
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
                      <!-- Filter & Search -->
                      <div class="flex py-3 items-center justify-between">
                        <div class="flex items-center space-x-4">
<<<<<<< HEAD:resources/views/payment/payment-history.blade.php
                            <button class="flex items-center pr-4 py-[5px] border-r-2 border-[#DCDCDC] text-gray-600 hover:bg-gray-100">
=======
                            <h4 class="flex items-center pl-1 pr-4 py-[5px] border-r-2 border-[#DCDCDC] text-gray-600">
>>>>>>> 7c8a78a (Your commit message here):resources/views/payment-history.blade.php
                                Find your recieft
                            </h4>
                            <input type="text" placeholder="Search..." class="w-72 px-4 py-[5px] border-2 rounded-lg border-[#DCDCDC]">
                        </div>
                        <div>
                            <img src="/assets/payment-history/refresh.svg" alt="">
                        </div>
                    </div>
      <!-- Subscription Item -->
          <!-- Card 1 -->
          <div class="flex border-2 border-[#DCDCDC] items-center space-x-32 p-3.5 bg-white rounded-lg">
            <!-- Payment & Invoice IDs -->
            <div class="flex md:w-[270px] space-y-1 flex-col">
              <h3 class="text-base font-semibold text-black">Payment ID</h3>
              <p class="text-[#787878] text-sm">15DFKD155DFKKD2D</p>
            </div>
          
           <div class="flex justify-between w-full items-center">
            <div class="flex space-y-1 flex-col">
                <h3 class="text-sm font-medium text-black">Invoice ID</h3>
                <p class="text-[#787878] text-sm">15DFK-D155D</p>
              </div>
            
              <!-- Service -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-sm font-medium text-black">Service</h3>
                <p class="text-[#787878] text-sm">Managed WordPress (Billed Yearly)</p>
              </div>
            
              <!-- Payment Date -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-sm font-medium text-black">Paid at</h3>
                <p class="text-[#787878] text-sm">2025-05-07</p>
              </div>
            
              <!-- Amount -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-sm font-medium text-black">Amount</h3>
                <p class="text-[#787878] text-sm">$79.00</p>
              </div>
            
              <!-- Details Button -->
              <div class="flex">
              <img src="/assets/payment-history/next.svg" alt="">
              </div>
           </div>
          </div>
          
  
      <!-- Duplicate the above div for more subscriptions -->
      
    </div>
  </div>
  @endsection
