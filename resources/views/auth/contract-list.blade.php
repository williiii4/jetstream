<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @lang('dashboard.back_contracts_list')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- -->
                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    @if (count($contracts) === 0)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ 'No hay datos que mostrar' }}
                            </td>
                        </tr>
                        
                        @else

                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">USER</th>
                                    <th scope="col" class="px-6 py-3">CONTRACT</th>
                                    <th scope="col" class="px-6 py-3">VALUE</th>
                                    <th scope="col" class="px-6 py-3">START</th>
                                    <th scope="col" class="px-6 py-3">END</th>
                                    <th scope="col" class="px-6 py-3">INTEREST</th>
                                </tr>
                            </thead>
                            <tbody>                        
                        
                            @foreach($contracts as $contract)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $contract->id }}</td> 
                                {{-- <td class="px-6 py-4">{{ $contract->user->name }}</td>  --}}
                                <td class="min-w-[150px] text-black dark:text-white ng-tns-c19-2">
                                    <div class="flex items-center ng-tns-c19-2">
                                        @if ($contract->user->profile_photo_path)
                                            <img src="{{ asset('/storage/' . $contract->user->profile_photo_path ) }}" alt="avatar" class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3 ng-tns-c19-2">
                                            <span class="whitespace-nowrap ng-tns-c19-2 ml-2">{{ $contract->user->name }}</span>
                                        @else
                                            <img src="{{ $contract->user->profile_photo_url }}" alt="avatar" class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3 ng-tns-c19-2">
                                            <span class="whitespace-nowrap ng-tns-c19-2 ml-2">{{ $contract->user->name }}</span>
                                        @endif
                                    </div>
                                </td>                          
                                <td class="px-6 py-4">{{ $contract->name }}</td>
                                <td class="px-6 py-4">${{ $contract->price }}</td>
                                <td class="px-6 py-4">{{ $contract->start_date }}</td>
                                <td class="px-6 py-4">{{ $contract->end_date }}</td>
                                <td class="px-6 py-4">{{ $contract->interest }}%</td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <!-- -->
            </div>
        </div>
    </div>

</x-app-layout>
