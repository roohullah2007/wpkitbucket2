@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 w-screen md:px-28 h-screen py-6">
    <h2 class="text-xl border-b border-gray-500 py-4 font-semibold mb-4">Payment-history</h2>
    
    <!-- Tabs -->
    <div class="flex space-x-5 border-b">
      <a href="{{route('subscription')}}" class="py-2 text-base text-blue-500 border-b-2 border-blue-500">Subscriptions</a>
      <a href="{{route('payment-history')}}" class="py-2 text-base text-gray-500">Payment History</a>
      <a href="{{route('refund-history')}}"  class="py-2 text-base text-gray-500">Refund History</a>
    </div>
  
    <!-- Subscription List -->
    <div class="mt-4 space-y-3">
                      <!-- Filter & Search -->
                      <div class="flex py-3 items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <h4 class="flex items-center pl-1 pr-4 py-[5px] border-r-2 border-[#DCDCDC] text-gray-600">
                                Find your recieft
                            </h4>
                            <input type="text" placeholder="Search..." class="w-72 px-4 py-[5px] border-2 rounded-lg border-[#DCDCDC]">
                        </div>
                        <div>
                            <img src="/assets/payment-history/refresh.svg" alt="">
                        </div>
                    </div>


          <!-- Card 1 -->
          <div class="flex border-2 items-center space-x-32 p-3.5 bg-white rounded-lg">
            <!-- Service -->
            <div class="flex md:w-[270px] space-y-1 flex-col">
              <h3 class="text-base font-semibold text-gray-700">Service</h3>
              <p class="text-gray-500 text-sm">Managed WordPress</p>
            </div>
          
            <div class="flex justify-between w-full items-center">
              <!-- Invoice ID -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-gray-700">Invoice ID</h3>
                <p class="text-gray-700 text-sm">W-251422636</p>
              </div>
          
              <!-- Status -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-gray-700">Status</h3>
                <p class="text-green-500 bg-green-100 px-2 py-1 text-sm rounded-lg">REFUNDED</p>
              </div>
          
              <!-- Amount -->
              <div class="flex space-y-1 flex-col">
                <h3 class="text-base font-semibold text-gray-700">Amount</h3>
                <p class="text-sm text-orange-500">$79.00</p>
              </div>
          
              <!-- Download & Details Icons -->
              <div class="flex space-x-4">
                <button>
                  <img src="/assets/icons/download.svg" alt="Download">
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
