@extends('layouts.app')

@section('content')
    <div class="mx-auto px-4 w-screen md:px-20 h-screen ">
        <!-- Header Section -->
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Title -->
                <h1 class="text-[16px] md:text-[24px] font-semibold text-gray-800 mb-3">Hosted Websites</h1>
                <div class="flex pb-3 items-center space-x-2">
                    <button class="flex items-center bg-white space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 py-[4px] border-2 border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                       <img src="/assets/icon/cloud.svg" class="h-6 w-6" alt="">
                        <span>Backup Restore</span>
                    </button>

<div>
    <!-- Trigger Button -->
    <button id="open-modal1"
        class="flex items-center space-x-1 md:space-x-3 text-[10px] md:text-sm px-5 bg-black py-[5px] border border-gray-300 rounded-lg text-white hover:bg-blue-700">
        <img src="/assets/icon/add.svg" class="h-6 w-6" alt="">
        <span>Add Website</span>
    </button>

    <!-- Modal -->
    <div id="modal1" x-show="open" x-transition
        class="fixed hidden inset-0 flex z-50 items-center justify-center bg-black bg-opacity-50 p-4">
        <div class="bg-white  max-w-[787px] h-[679px] rounded-lg shadow-lg w-full p-8 relative">
            
            <!-- Close Button -->
            <button id="close-modal1"

                class="absolute top-6 right-4 text-gray-500 hover:text-gray-700 text-xl">
                ✖
            </button>
            <h2 class="text-lg font-semibold mb-6">Install New Website</h2>
            <div class="my-4">
                <div class="h-[6px] w-full bg-[#E7DBD5]">
                    <div class="h-[6px] bg-black" style="width: 30%;"></div>
                </div>
                <p class="text-xs text-[#0B4E2B] mt-1">30%</p>
            </div>
            <!-- Modal Content -->
            <div class="flex gap-6">
                    <div class="space-y-6 w-full">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Site name</label>
                            <input type="text" placeholder="Your WordPress Website"
                                class="w-full border rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-gray-300">
                        </div>
                        <div>
                            <label class="block text-[#090914] text-sm font-medium mb-4">Website Language</label>
                            <select class="w-full text-[#777782] text-sm border-2 border-[#D2D2D2] rounded-lg px-4 py-3">
                                <option>English (United States)</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[#090914] text-sm font-medium mb-4">Admin Email</label>
                                <input type="email" value="cyz25142@gmail.com"
                                    class="w-full text-[#777782] stroke-[#777782] border-2 text-sm border-[#D2D2D2] rounded-lg px-4 py-3">
                            </div>
                    
                            <div class="relative">
                                <label class="block text-[#090914] text-sm font-medium mb-4">Admin Password</label>
                                <input type="password" value="*****************"
                                    class="w-full text-[#777782] text-sm border-2 border-[#D2D2D2] rounded-lg px-4 py-3 pr-10">
                                <button class="absolute inset-y-0 top-8 right-3 flex justify-center items-center text-gray-500">
                                    <img src="/assets/profile-access/unhide-pass.svg" alt="">
                                </button>
                            </div>
                        </div>
                                <!-- Performance Section -->
                            <div class="mt-4">
                                <h3 class="font-medium text-gray-700">Performance improvements enabled by defaults</h3>
                                <div class="mt-2 space-y-2">
                                    <div class="flex items-start gap-2">
                                        <span class="text-green-500">✔</span>
                                        <div>
                                            <h4 class="font-medium">WPRocket</h4>
                                            <p class="text-sm text-gray-600">We will install WPRocket to enhance your website performance. Our team will activate the license for you later.</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2">
                                        <span class="text-green-500">✔</span>
                                        <div>
                                            <h4 class="font-medium">WordFence</h4>
                                            <p class="text-sm text-gray-600">Although we have a strong server-side security already enabled. We also install WordFence for your site’s security enhancement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div> 

            
            <!-- Next Button -->
            <div class="flex justify-end mt-2">
                <button id="next-modal" class="bg-black text-white text-base px-6 py-2 rounded-lg flex items-center space-x-2">
                    <span>Next</span> <img src="/assets/website-icons/next.svg" class="w-5 h-5" alt="">
                </button>
            </div>
        </div>
    </div>
<!-- Modal 2 -->
<div id="modal2" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white relative max-w-[982px] h-[545px] p-8 rounded-lg shadow-lg w-full">
        <button id="close-modal" class="absolute top-6 right-4 text-gray-500 hover:text-gray-700 text-xl">✖</button>

        <div class="flex flex-col justify-between space-y-[152px]">
            <div>
                <h2 class="text-lg font-semibold mb-6">Domain Connectivity</h2>
                <div class="space-y-6 w-full">
                    <label class="block text-[#090914] text-sm font-medium mb-2">Domain Options</label>
                    <div class="flex space-x-4">
                        <button class="flex items-center space-x-4 border-2 text-lg border-[#D2D2D2] rounded-lg px-4 py-2 w-full md:w-auto bg-white text-[#090914] font-medium">
                            <img src="/assets/icons/custom-domain.svg" class="w-10 h-10" alt=""> <span>Custom Domain</span>
                        </button>
                        <button class="flex items-center space-x-4 border-2 text-lg border-[#D2D2D2] rounded-lg px-4 py-2 w-full md:w-auto bg-white text-[#777782] font-medium">
                            <img src="/assets/icons/temp-domain.svg" class="w-10 h-10" alt=""> <span>Temporary Domain</span>
                        </button>
                    </div>

                    <div class="relative">
                        <label class="block text-[#090914] text-sm font-medium mb-4">Enter your registered domain name</label>
                        <img src="/assets/website-icons/tick.svg" class="absolute bottom-3.5 w-5 h-5 left-2" alt="">
                        <input type="text" value="customdomain.com" class="text-[#777782] max-w-[629px] w-full text-sm border-2 border-[#D2D2D2] rounded-lg px-8 py-3">
                    </div>
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="mt-16">
                <div class="h-3 w-full bg-gray-200">
                    <div class="h-3 bg-blue-500" style="width: 70%;"></div>
                </div>
                <p class="text-xs text-blue-500 mt-1">70%</p>
            </div>
        </div>

<div class="flex justify-between mt-2 items-center">
    <!-- Next Button -->
    <div id="back-modal2" class="flex">
        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-7 text-base00 flex items-center space-x-2">
            <span>Back</span><img src="/assets/website-icons/next.svg" class="w-5 h-5" alt="">
        </button>
    </div>     <!-- Next Button -->
        <!-- Next Button -->
        <div class="flex justify-end">
            <button id="next-modal2" class="bg-blue-600 text-white px-6 py-2 rounded-lg text-base hover:bg-blue-700 flex items-center space-x-2">
                <span>Next</span> <img src="/assets/website-icons/next.svg" class="w-5 h-5" alt="">
            </button>
        </div>
</div>

    </div>
</div>

<!-- Modal 3 (Plugins Selection) -->
<div id="modal3" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white relative max-w-[982px] h-[545px] p-8 rounded-lg shadow-lg w-full">
        <button id="close-modal3" class="absolute top-6 right-4 text-gray-500 hover:text-gray-700 text-xl">✖</button>

        <h2 class="text-lg font-semibold mb-2">Plugins</h2>
        <p class="text-sm text-gray-600 mb-6">Select the plugins which you will need to build your website (Licenses will be activated by our team)</p>

        <!-- Plugin Selection -->
        <div class="space-y-4">
            <div>
                <h3 class="font-semibold text-base mb-2">Please select your Website Builder Plugin.</h3>
                <div class="flex space-x-4">
                    <button  class="flex items-center space-x-4 border-2 text-lg border-[#2563EB] shadow-md rounded-lg px-4 py-[7px] w-full md:w-auto bg-white text-[#090914] font-medium">
                        <img src="/assets/icons/elementor.svg" class="w-10 h-10" alt=""> <span>Elementor Pro</span>
                    </button>
                    <button class="flex items-center space-x-4 border-2 text-lg border-[#D2D2D2] rounded-lg px-4 pr-[71px] py-[7px] w-full md:w-auto bg-white text-[#090914] font-medium">
                        <img src="/assets/icons/divi.svg" class="w-10 h-10" alt=""> <span>Divi Pro</span>
                    </button>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-base mb-2">Speed Optimization Plugin</h3>
                <div class="flex space-x-4">
                    <button  class="flex items-center space-x-4 border-2 text-sm border-[#2563EB] shadow-md rounded-lg px-4 py-[13px] w-full md:w-auto bg-white text-[#090914] font-medium">
                        <img src="/assets/icons/litespeed.svg" class="w-6 h-6" alt=""> <span>LightSpeed Cache</span>
                    </button>
                    <button class="flex items-center space-x-4 border-2 text-lg border-[#D2D2D2] rounded-lg px-4 pr-[71px] py-[13px] w-full md:w-auto bg-white text-[#090914] font-medium">
                        <img src="/assets/icons/wp-rocket.svg" class="w-6 h-6" alt=""> <span>WP Rocket</span>
                    </button>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-base mb-2">SEO Plugins</h3>
                <button class="flex items-center space-x-4 border-2 text-lg border-[#D2D2D2] rounded-lg px-[23px] py-[7px] w-full md:w-auto bg-white text-[#090914] font-medium">
                    <img src="/assets/icons/rankmath.svg" class="w-10 h-10" alt=""> <span>RankMath Pro</span>
                </button>
            </div>
        </div>
        <div class="flex justify-between mt-[72px] items-center">
            <!-- Next Button -->
            <div id="back-modal3" class="flex">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-7 text-base00 flex items-center space-x-2">
                    <span>Back</span><img src="/assets/website-icons/next.svg" class="w-5 h-5" alt="">
                </button>
            </div>     <!-- Next Button -->
                <!-- Next Button -->
                <div class="flex justify-end">
                    <button id="next-modal3" class="bg-blue-600 text-white px-6 py-2 rounded-lg text-base hover:bg-blue-700 flex items-center space-x-2">
                        <span>Next</span> <img src="/assets/website-icons/next.svg" class="w-5 h-5" alt="">
                    </button>
                </div>
        </div>
    </div>
</div>
<div id="modal4" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white relative max-w-[982px] h-[545px] p-8 rounded-lg shadow-lg w-full">
        <!-- Close Button -->
        <button  id="close-install-modal"  class="absolute top-6 right-4 text-gray-500 hover:text-gray-700 text-xl">
            ✖</button>
        <div class="flex mt-24 flex-col justify-between space-y-[152px]">
            <div>
                <div class="space-y-6 w-full">
                       <!-- Success Icon -->
        <div class="flex justify-center mb-4">
            <div class="bg-green-500 rounded-full p-4">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>
        
        <!-- Message -->
        <h2 class="text-center text-lg font-semibold">Your website is being installed</h2>
        <p class="text-center text-gray-500 mb-4">Almost there! Your website will be ready in 2-5 mins.</p>

                </div>
            </div>

            <!-- Progress Bar -->
            <div class="mt-16">
                <div class="h-3 w-full bg-gray-200">
                    <div class="h-3 bg-blue-500" style="width: 99%;"></div>
                </div>
                <p class="text-xs text-blue-500 mt-1">99%</p>
            </div>
        </div>


        <!-- Done Button -->
        <div class="flex justify-end">
            <button id="done-install"  class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Done</button>
        </div>
    </div>
</div>


</div>


                </div>
            </div>
                <!-- Filter & Search -->
                <div class="flex border-y-2 py-3 border-[#DCDCDC] items-center space-x-4 mb-5">
                    <button class="flex items-center px-4 py-[5px] border-r-2 border-[#DCDCDC] text-gray-600 hover:bg-gray-100">
                     <img src="/assets/icon/filter.svg" alt="">
                        Filter
                    </button>
                    <input type="text" placeholder="Search..." class="w-72 px-4 py-[4px] border-2 rounded-lg border-[#DCDCDC]">
                    <button class="flex items-center px-4 py-[4px] text-gray-600 hover:bg-gray-100">
                        <img src="/assets/icon/calender.svg" class="w-6 h-6 mr-1" alt="">
                        Latest
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
            </div>

                <!-- Website List -->
    <div class="border-2 bg-white rounded-lg px-4 py-2 flex items-center justify-between space-x-32 border-[#DCDCDC] ">
        <div class="flex items-center pr-20 space-x-4">
            <img src="/assets/website-icons/up.png" alt="">
            <div class="flex items-center space-x-3">
                <img src="/assets/website-icons/logo.png" alt="">
                <div>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">xyz Comp</a>
                <div class="flex items-center space-x-1 text-gray-600">
                    <img src="/assets/link.svg" alt="">
                    <a href="https://www.xyzcomp.fr" class="text-gray-500 hover:underline">https://www.xyzcomp.fr</a>
                </div>
                </div>
            </div>
        </div>

        <div class="flex pl-5 border-l-2 border-[#DCDCDC] w-full items-center justify-between space-x-4">
            <div class="flex space-x-2 items-center">
                <img src="/assets/website-icons/google.svg" alt="">
                <span class="text-sm font-semibold text-[#282828]">58/100</span>
            </div>
            <div class="pl-1 pr-2 py-[1px] space-x-1  flex items-center  rounded-full bg-green-100">
                <img src="/assets/website-icons/setting.svg" class="w-[30px] h-[30px]" alt="">
                <span class=" text-sm text-green-600">Managed</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
                <img src="/assets/website-icons/backup.svg" class="w-[25px] h-[25px]" alt="">
                <span class="text-sm text-gray-600 ">Backup Active</span>
            </div> 
            <div class="px-3 py-[1px] space-x-2 flex items-center">
            <span class="italic font-semibold text-sm">php</span>
            <span class="text-sm font-semibold text-[#646464]">8.2</span>
            </div>

            <button class="px-4 py-2 border-2 border-[#DCDCDC] text-gray-800 font-medium text-sm rounded-lg hover:bg-gray-300 flex items-center">
                <img src="/assets/website-icons/wordpress.png" alt="WP Logo" class="w-5 h-5 mr-2">
                WP Admin
            </button>
        </div>
    </div>
    </div>
        
    <script>
        //modal1
            document.getElementById("open-modal1").addEventListener("click", function () {
        document.getElementById("modal1").classList.remove("hidden");
    });

    document.getElementById("close-modal1").addEventListener("click", function () {
        document.getElementById("modal1").classList.add("hidden");
    });

document.addEventListener('DOMContentLoaded', function () {
    // Modal 1 → Modal 2
    document.getElementById('next-modal').addEventListener('click', function() {
        document.getElementById('modal1').classList.add('hidden');
        document.getElementById('modal2').classList.remove('hidden');
    });

    // Modal 2 → Modal 3
    document.getElementById('next-modal2').addEventListener('click', function() {
        document.getElementById('modal2').classList.add('hidden');
        document.getElementById('modal3').classList.remove('hidden');
    });

    // Back: Modal 2 → Modal 1
    document.getElementById('back-modal2').addEventListener('click', function() {
        document.getElementById('modal2').classList.add('hidden');
        document.getElementById('modal1').classList.remove('hidden');
    });

    // Back: Modal 3 → Modal 2
    document.getElementById('back-modal3').addEventListener('click', function() {
        document.getElementById('modal3').classList.add('hidden');
        document.getElementById('modal2').classList.remove('hidden');
    });

    // Close Modal 2 → Go back to Modal 1
    let closeModal2 = document.getElementById('close-modal');
    if (closeModal2) {
        closeModal2.addEventListener('click', function() {
            document.getElementById('modal2').classList.add('hidden');
            document.getElementById('modal1').classList.remove('hidden');
        });
    } else {
        console.error("❌ Close button for Modal 2 not found!");
    }

    // Close Modal 3 → Go back to Modal 2
    let closeModal3 = document.getElementById('close-modal3');
    if (closeModal3) {
        closeModal3.addEventListener('click', function() {
            document.getElementById('modal3').classList.add('hidden');
            document.getElementById('modal2').classList.remove('hidden');
        });
    } else {
        console.error("❌ Close button for Modal 3 not found!");
    }
});
document.getElementById("next-modal3").addEventListener("click", function () {
    document.getElementById("modal3").classList.add("hidden");
    document.getElementById("modal4").classList.remove("hidden");
});

// close install
    document.getElementById('close-install-modal').addEventListener('click', function() {
        document.getElementById('modal4').classList.add('hidden');
    });

    document.getElementById('done-install').addEventListener('click', function() {
        document.getElementById('modal4').classList.add('hidden');
    });

    </script>
@endsection