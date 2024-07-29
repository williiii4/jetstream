<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-form-section  submit="send_email_referred">
        <x-slot name="title">
            {{ __('Enviar invitación vía email') }}
        </x-slot>
    
        <x-slot name="description">
            {{ __('Enviar invitación a registrarse como mi referido.') }}
        </x-slot>
    
        <x-slot name="form">
            
                @csrf
                {{$email}}
                <!-- Referral Email -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Email') }}" />
                    <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email" required autocomplete="email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            
        </x-slot>
    
        <x-slot name="actions">
            <x-action-message class="me-3" on="send">
                {{ __('Send.') }}
            </x-action-message>
    
            {{-- <x-button wire:loading.attr="disabled" wire:target="photo"> --}}
            <x-button wire:loading.attr="disabled" wire:submit="send_email_referred">
                {{ __('Send') }}
            </x-button>


        </x-slot>
    </x-form-section>
    
</div>
