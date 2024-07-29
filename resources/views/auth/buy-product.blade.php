<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @lang('dashboard.back_marketplace')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- checkout -->

                <div class="container mx-auto mt-10">
                    <div class="sm:flex shadow-md my-10">
                        <div class="w-full sm:w-3/4 bg-white px-10 py-10">
                            <div class="flex justify-between border-b pb-8">
                                <h1 class="font-semibold text-2xl ml-3">
                                    @lang('dashboard.shoping_cart')
                                </h1>
                                <h2 class="font-semibold text-2xl ml-3 mr-3">1 Items</h2>
                            </div>
                            

                            <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                            
                                <div class="ml-6 mr-4 w-full rounded overflow-hidden shadow-lg bg-white border border-gray-50">
                
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
                                
                            </div>
                            <a href="{{ url('/products') }}" class="flex font-semibold text-blue-600 text-sm mt-10 ml-6">
                                <svg class="fill-current mr-2 text-blue-600 w-4" viewBox="0 0 448 512">
                                    <path
                                        d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                                </svg>
                                @lang('dashboard.back')
                            </a>
                        </div>
                        <div id="summary" class=" w-full   sm:w-1/4   md:w-1/2     px-8 py-10">
                            <h1 class="font-semibold text-2xl border-b pb-8">
                                @lang('dashboard.checkout_summary')
                            </h1>
                            <div class="flex justify-between mt-10 mb-5">
                                <span class="font-semibold text-sm uppercase">Items 1</span>
                                @if ($product->currency === 'USD')
                                    <span class="font-semibold text-sm">                                    
                                        ${{ $product->price }}
                                    </span>
                                @elseif ($product->currency === 'EURO')
                                    <span class="font-semibold text-sm">                                    
                                        {{ $product->price }} €
                                    </span>
                                @else
                                    <span class="font-semibold text-sm">                                    
                                        {{ $product->price }} {{ $product->currency}}
                                    </span>
                                @endif
                                
                            </div>
                            <div>
                                <label class="font-medium inline-block mb-3 text-sm uppercase">
                                    Shipping
                                </label>
                                <select class="block p-2 text-gray-600 w-full text-sm">
                                    <option>Standard shipping - $10.00</option>
                                </select>
                            </div>
                            <div class="py-10">
                                <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">
                                    Promo Code
                                </label>
                                <input type="text" id="promo" placeholder="Enter your code"
                                    class="p-2 text-sm w-full" />
                            </div>
                            <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">
                                Apply
                            </button>
                            <div class="border-t mt-8">
                                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                    <span>Total cost</span>
                                    {{-- <span>$600</span> --}}
                                    @if ($product->currency === 'USD')
                                    <span class="font-semibold text-sm">                                    
                                        ${{ $product->price }}
                                    </span>
                                @elseif ($product->currency === 'EURO')
                                    <span class="font-semibold text-sm">                                    
                                        {{ $product->price }} €
                                    </span>
                                @else
                                    <span class="font-semibold text-sm">                                    
                                        {{ $product->price }} {{ $product->currency}}
                                    </span>
                                @endif
                                </div>
                                <button
                                    class="bg-blue-400 font-semibold hover:bg-blue-500 py-3 text-sm text-white uppercase w-full rounded-sm">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- checkout -->
            </div>
        </div>
    </div>

</x-app-layout>
