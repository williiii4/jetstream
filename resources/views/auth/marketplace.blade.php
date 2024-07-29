<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @lang('dashboard.back_marketplace')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Start Section Card -->
                <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            
                        @foreach($products as $product)
                            @if ($product->active)                            
                            
                            <div class="m-4 rounded overflow-hidden shadow-lg bg-white">
                
                                <a href="#"></a>
                                <div class="relative">
                                    <a href="#">
                                        <img class="w-full"
                                            src="{{ asset('storage/images/products/' . $product->image . '?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500' ) }}"
                                            alt="Sunset in the mountains">
                                        <div
                                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0  opacity-25">
                                        </div>
                                    </a>
                                    <a href="{{ url('product/'. $product->id)  }}">
                                        <div
                                            class="absolute bottom-0 w-36 inline-flex left-0 bg-blue-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-blue-700 transition duration-500 ease-in-out rounded-tr-lg">
                                            
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                            <div class="ml-2">
                                                @lang('dashboard.buy_now')
                                            </div>
                                            
                                        </div>
                                    </a>
                    
                                    <a href="!#">
                                        <div
                                            class="text-sm absolute top-0 right-0 bg-blue-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-blue-700 transition duration-500 ease-in-out">
                                            <span class="font-bold">{{ $product->price }}</span>
                                            <small>{{ $product->currency }}</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-6 py-4">
                    
                                    <a href="#"
                                        class="font-semibold text-lg inline-block hover:text-blue-600 transition duration-500 ease-in-out">
                                        {{ $product->name}}
                                    </a>
                                    <p class="text-gray-500 text-sm">
                                        {{ $product->description }}.
                                    </p>
                                    <span class="font-bold text-lg">@lang('dashboard.card_monthly_profitability') {{ $product->interest }}%</span>
                                </div>
                                <div class="px-6 py-4 flex flex-row items-center">
                                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">                               
                                        <span class="font-bold text-lg"> @lang('dashboard.card_price') 
                                            
                                            @if ( $product->currency === 'USD' )
                                                ${{ $product->price }}</span>
                                            @elseif ($product->currency === 'EURO')
                                                {{ $product->price }} €</span>
                                            @else
                                               {{ $product->price }} {{ $product->currency}}</span>
                                            @endif
                                    </span>
                                </div>
                            </div>
                            @endif
            
                        @endforeach
                        
                    </div>
                </div>
                <!-- End Section Card -->
                <!-- Test -->

                {{-- <div class="bg-gray-800">
                    <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-between">
                
                        <div class="text-center">
                            <p class="mt-4 text-sm leading-7 text-white font-regular">
                                STEPS
                            </p>
                            <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-white">
                                How it <span class="text-blue-500">Works?</span>
                            </h3>
                
                        </div>
                
                        <div class="mt-20">
                            <ul class="">
                
                                <li class="text-left mb-10">
                                    <div class="flex flex-row items-start">
                                        <div class="flex flex-col items-center justify-center mr-5 mt-4">
                                            <div
                                                class="flex items-center justify-center h-20 w-20 rounded-full bg-blue-500 text-white border-4 border-white text-xl font-semibold">
                                                1
                                            </div>
                                            <span class="text-white mt-2">STEP</span>
                                        </div>
                                        <div class="bg-gray-100 p-5 pb-10 rounded">
                                            <h4 class="text-lg leading-6 font-semibold text-gray-900">Enter Headline</h4>
                                            <p class="mt-2 text-base leading-6 text-gray-500">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                                                suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-left mb-10">
                                    <div class="flex flex-row items-start">
                                        <div class="flex flex-col items-center justify-center mr-5 mt-4">
                                            <div
                                                class="flex items-center justify-center h-20 w-20 rounded-full bg-blue-500 text-white border-4 border-white text-xl font-semibold">
                                                2
                                            </div>
                                            <span class="text-white mt-2">STEP</span>
                                        </div>
                                        <div class="bg-gray-100 p-5 pb-10 rounded">
                                            <h4 class="text-lg leading-6 font-semibold text-gray-900">Enter Headline</h4>
                                            <p class="mt-2 text-base leading-6 text-gray-500">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                                                suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-left mb-10">
                                    <div class="flex flex-row items-start">
                                        <div class="flex flex-col items-center justify-center mr-5 mt-4">
                                            <div
                                                class="flex items-center justify-center h-20 w-20 rounded-full bg-blue-500 text-white border-4 border-white text-xl font-semibold">
                                                3
                                            </div>
                                            <span class="text-white mt-2">STEP</span>
                                        </div>
                                        <div class="bg-gray-100 p-5 pb-10 rounded">
                                            <h4 class="text-lg leading-6 font-semibold text-gray-900">Enter Headline</h4>
                                            <p class="mt-2 text-base leading-6 text-gray-500">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                                                suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                
                            </ul>
                        </div>
                
                    </div>
                </div> --}}
                <!-- End Test-->

                <!-- STEP https://tailwindflex.com/@anonymous/steps-section-for-explaining-process -->

                {{-- <section class="relative overflow-hidden bg-gray-50 dark:bg-white">
                    <div class="mt-2 md:mt-0 py-12 pb-6 sm:py-16 lg:pb-24 overflow-hidden">
                        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                            <div class="relative mt-12 lg:mt-20">
                                <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                                    <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="875" height="48" viewBox="0 0 875 48"
                                        fill="none">
                                        <path
                                            d="M2 29C20.2154 33.6961 38.9915 35.1324 57.6111 37.5555C80.2065 40.496 102.791 43.3231 125.556 44.5555C163.184 46.5927 201.26 45 238.944 45C312.75 45 385.368 30.7371 458.278 20.6666C495.231 15.5627 532.399 11.6429 569.278 6.11109C589.515 3.07551 609.767 2.09927 630.222 1.99998C655.606 1.87676 681.208 1.11809 706.556 2.44442C739.552 4.17096 772.539 6.75565 805.222 11.5C828 14.8064 850.34 20.2233 873 24"
                                            stroke="#D4D4D8" stroke-width="3" stroke-linecap="round" stroke-dasharray="1 12" />
                                    </svg>
                                </div>
                                <div
                                    class="relative grid grid-cols-1 text-center gap-y-8 sm:gap-y-10 md:gap-y-12 md:grid-cols-3 gap-x-12">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-full shadow">
                                            <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">1</span>
                                        </div>
                                        <h3
                                            class="mt-4 sm:mt-6 text-xl font-semibold leading-tight text-gray-900 dark:text-white md:mt-10">
                                            Register
                                        </h3>
                                        <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                            Register with your email or using sign up with goolgle
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-full shadow">
                                            <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">2</span>
                                        </div>
                                        <h3
                                            class="mt-4 sm:mt-6 text-xl font-semibold leading-tight text-gray-900 dark:text-white md:mt-10">
                                            Create your image
                                        </h3>
                                        <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                            Choose AI assistants to create your image variations.
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-full shadow">
                                            <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">3</span>
                                        </div>
                                        <h3
                                            class="mt-4 sm:mt-6 text-xl font-semibold leading-tight text-gray-900 dark:text-white md:mt-10">
                                            Download
                                        </h3>
                                        <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                            Download zip of all variations
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <!-- STEP -->
                {{-- <div class="bg-gray-700 p-4 min-h-screen">
                    <div class="max-w-7xl mx-auto h-max px-6 md:px-12 xl:px-6">
                      <div class="md:w-2/3 lg:w-1/2">
                  
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-100">
                          <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <h2 class="my-8 text-2xl font-bold text-white md:text-4xl">How we work?</h2>
                        <p class="text-gray-300">We follow our process to get you started as quickly as possible</p>
                      </div>
                      <div
                        class="mt-16 grid divide-x divide-y  divide-gray-700 overflow-hidden rounded-3xl border text-gray-600 border-gray-700 sm:grid-cols-2 lg:grid-cols-4  lg:divide-y-0 xl:grid-cols-4">
                        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                          <div class="relative space-y-8 py-12 p-8">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
                              </path>
                              <path d="M10 10l2 -2v8"></path>
                            </svg>
                            <div class="space-y-2">
                              <h5 class="text-xl font-semibold text-white transition">Initial Discussion</h5>
                              <p class="text-gray-300">We will have discussions on the requirements to ensure your MVP (Minimum Viable
                                Product) is ready for the initial launch</p>
                            </div>
                          </div>
                        </div>
                        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                          <div class="relative space-y-8 py-12 p-8">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
                              </path>
                              <path d="M10 8h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3"></path>
                            </svg>
                            <div class="space-y-2">
                              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Deal Finalized</h5>
                              <p class="text-gray-300">Once we agree on what to build, We will start working on it right away.</p>
                            </div>
                          </div>
                        </div>
                        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                          <div class="relative space-y-8 py-12 p-8">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
                              </path>
                              <path
                                d="M10 9a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1">
                              </path>
                            </svg>
                            <div class="space-y-2">
                              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Product Delivery</h5>
                              <p class="text-gray-300">We will develop your product MVP in 15 days (more time required depending on the
                                complexity of the project)</p>
                            </div>
                          </div>
                        </div>
                        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                          <div class="relative space-y-8 py-12 p-8">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
                              </path>
                              <path d="M10 8v3a1 1 0 0 0 1 1h3"></path>
                              <path d="M14 8v8"></path>
                            </svg>
                            <div class="space-y-2">
                              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Celebrate your Launch
                              </h5>
                              <p class="text-gray-300">We love Celebrations. We will celebrate your launch on our Social Profiles.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                  <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-4 sm:px-8">
                    <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Total Member</h3>
                            <p class="text-3xl">12,768</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-blue-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Total Post</h3>
                            <p class="text-3xl">39,265</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Total Comment</h3>
                            <p class="text-3xl">142,334</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-red-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Server Load</h3>
                            <p class="text-3xl">34.12%</p>
                        </div>
                    </div>
                </div>
                <!-- 0000 -->
            </div>            
        </div>        
    </div>   

</x-app-layout>
