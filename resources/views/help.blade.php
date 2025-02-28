@extends('layouts.app')

@section('content')
<div class=" flex flex-col p-6 max-w-7xl mx-auto items-center w-screen h-screen">
<div class="flex flex-col max-w-4xl items-center bg-gray-50">
  <h1 class="text-2xl font-semibold text-gray-800">Hi, how can we help you?</h1>
  <p class="mt-5 text-sm text-gray-600">Use Knowledge Base search below or find answers in 
    <a href="#" class="text-[#3B82F6] underline">Tutorials</a>
  </p>
  <div class="relative mt-8 mx-auto w-full">
    <input 
      type="text" 
      placeholder="Describe your issue" 
      class="w-[540px] p-4 pl-12 text-gray-800 border rounded-lg shadow-sm focus:ring-2 focus:ring-[#3b83f6d8] focus:outline-none border-gray-300"
    />
    <span class="absolute left-4 top-4 text-gray-500">
        <svg data-v-fbff51d6="" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="icon-search" focusable="false" viewBox="0 0 24 24" class="icon-gray h-icon" width="20" height="20"><!----><g data-v-fbff51d6=""><path data-v-fbff51d6="" fill-rule="evenodd" clip-rule="evenodd" d="M15.5 14H14.71L14.43 13.73C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3C5.91 3 3 5.91 3 9.5C3 13.09 5.91 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"></path></g></svg>
    </span>
  </div>
  
</div>

<div>
    <h2 class="text-center text-xl mt-10 font-semibold text-gray-800 mb-4">Can't find an answer?</h2>

<p class="py-6 bg-white px-8 text-black border-gray-200 rounded-t-lg border text-base font-medium">Select a topic and order to get assistance</p>
<div class="md:w-[1200px] mx-auto  bg-white border-gray-200 p-8 border rounded-b-lg">
      
      <div class="grid grid-cols-3 gap-6 items-center">
        <!-- Stepper Section -->
        <div class="col-span-1">
            <div class="flex flex-col space-y-4 relative">
                <!-- Step 1 -->
                <div class="flex z-10 items-center space-x-4 text-base">
                  <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-[#3B82F6] font-semibold">1</div>
                  <span class="text-gray-700 font-medium">Select the topic</span>
                </div>
                <!-- Line between Step 1 and Step 2 -->
                <div class="absolute left-5 top-0 h-10 border-l-2 border-gray-300"></div>
                <!-- Step 2 -->
                <div class="flex z-10 items-center space-x-4 text-base">
                  <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 text-gray-500 font-semibold">2</div>
                  <span class="text-gray-500">Select the subscription</span>
                </div>
                <!-- Line between Step 2 and Step 3 -->
                <div class="absolute left-5 top-16 h-10 border-l-2 border-gray-300"></div>
                <!-- Step 3 -->
                <div class="flex z-10 items-center space-x-4 text-base">
                  <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 text-gray-500 font-semibold">3</div>
                  <span class="text-gray-500">Get support from our team</span>
                </div>
              </div>              
        </div>
        
        <!-- Dropdown Section -->
        <div class="col-span-2">
          <div class="space-y-4">
            <div>
              <label for="topic" class="block text-gray-700 font-medium mb-2">Select Topic</label>
              <select 
                id="topic" 
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-purple-400 focus:outline-none text-gray-600">
                <option disabled selected>Select Topic</option>
                <option>Billing Issue</option>
                <option>Technical Support</option>
                <option>General Inquiry</option>
              </select>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>
  
      </div>
  
  
  
@endsection
