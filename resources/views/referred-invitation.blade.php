<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Referir a nuevo usuario') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- @livewire('api.api-token-manager') --}}
            {{-- @livewire('send-invitation-to-subscribe-referral-form') --}}
            @livewire('referred-form-invitation')
            
        </div>
    </div>
</x-app-layout>