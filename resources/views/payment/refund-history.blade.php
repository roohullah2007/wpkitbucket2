@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen">
    <h2 class="text-xl border-b-2 border-[#E8E8E8] py-4 font-semibold mb-4">Refund-history</h2>
    
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
          <!-- Card 1 -->
          <div class="flex border-2 border-[#DCDCDC] items-center space-x-32 p-3.5 bg-white rounded-lg">
            <!-- Service -->
            <div class="flex md:w-[270px] space-y-1 flex-col">
              <h3 class="text-base font-semibold text-black">Service</h3>
              <p class="text-black text-sm">Managed WordPress</p>
            </div>
          
            <div class="flex justify-between w-full items-center">
              <!-- Payment ID -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Payment ID</h3>
                <p class="text-black text-sm">W-251422636</p>
              </div>
          
              <!-- Status -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Status</h3>
                <p class="text-[#23DA4B] bg-[#F1FDF5] px-2 py-1 text-sm rounded-lg">REFUNDED</p>
              </div>
          
              <!-- Amount -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Amount</h3>
                <p class="text-sm text-black">$79.00</p>
              </div>
          
              <!-- Download & Details Icons -->
              <div class="flex space-x-8">
                <button>
                  <img src="/assets/payment-history/download.svg" alt="Download">
                </button>
                <button>
                  <img src="/assets/payment-history/next.svg" alt="Details">
                </button>
              </div>
            </div>
          </div>  
                  <!-- Card 2 -->
          <div class="flex border-2 border-[#DCDCDC] items-center space-x-32 p-3.5 bg-white rounded-lg">
            <!-- Service -->
            <div class="flex md:w-[270px] space-y-1 flex-col">
              <h3 class="text-base font-semibold text-black">Service</h3>
              <p class="text-black text-sm">Managed WordPress</p>
            </div>
          
            <div class="flex justify-between w-full items-center">
              <!-- Payment ID -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Payment ID</h3>
                <p class="text-black text-sm">W-251422636</p>
              </div>
          
              <!-- Status -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Status</h3>
                <p class="text-[#E7BA3D] bg-[#FFF5D9] px-2 py-1 text-sm uppercase rounded-lg">In progress</p>
              </div>
          
              <!-- Amount -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-black">Amount</h3>
                <p class="text-sm text-black">$79.00</p>
              </div>
          
              <!-- Download & Details Icons -->
              <div class="flex space-x-8">
                <button>
                  <img src="/assets/payment-history/download.svg" alt="Download">
                </button>
                <button>
                  <img src="/assets/payment-history/next.svg" alt="Details">
                </button>
              </div>
            </div>
          </div>
          
          
          
          
  
      <!-- Duplicate the above div for more subscriptions -->
      
    </div>
  </div>
  @endsection
