<div>
    {{-- The whole world belongs to you. --}}
    <x-jet-danger-button wire:click="confirmUserDeletion('1')">
        Eliminar U

    <x-jet-confirmation-modal>
        <x-slot name="title">
        </x-slot>

        <x-slot name="content">
        </x-slot>

        <x-slot name="footer">
        </x-slot>

    </x-jet-confirmation-modal>
</div>
