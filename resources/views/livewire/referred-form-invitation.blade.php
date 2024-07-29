<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- <x-guest-layout> --}}


    <x-validation-errors class="mb-4" />

    {{-- <form method="POST" action="{{ route('invitation') }}">
        @csrf

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="email" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ms-4">
                {{ __('Send') }}
            </x-button>
        </div>
    </form> --}}

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div wire:snapshot="{&quot;data&quot;:{&quot;createApiTokenForm&quot;:[{&quot;name&quot;:&quot;&quot;,&quot;permissions&quot;:[[&quot;read&quot;],{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}],&quot;displayingToken&quot;:false,&quot;plainTextToken&quot;:null,&quot;managingApiTokenPermissions&quot;:false,&quot;managingPermissionsFor&quot;:null,&quot;updateApiTokenForm&quot;:[{&quot;permissions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}],&quot;confirmingApiTokenDeletion&quot;:false,&quot;apiTokenIdBeingDeleted&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;5pjGofHAQP2lCOBJhAfi&quot;,&quot;name&quot;:&quot;api.api-token-manager&quot;,&quot;path&quot;:&quot;user\/api-tokens&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;cf3d7dc7ef860add4d9fe2f6dbfc507d10083803c3f02029f80d89c607a2d3b3&quot;}"
            wire:effects="[]" wire:id="5pjGofHAQP2lCOBJhAfi">
            <!-- Generate API Token -->
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            @lang('dashboard.back_section_referred')
                        </h3>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            @lang('dashboard.msg_invitation_referred')
                        </p>
                    </div>

                    <div class="px-4 sm:px-0">

                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="POST" action="{{ route('invitation') }}">
                        @csrf
                        <div
                            class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Token Name -->
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                        for="name">
                                        Email
                                    </label>
                                    <input
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                        id="email" type="email" name="email" autofocus="autofocus">
                                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                <!-- Token Permissions -->
                                <!--[if BLOCK]><![endif]-->
                                <div class="col-span-6">
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                        for="permissions">
                                        @lang('dashboard.msg_invitation_type')
                                    </label>

                                    <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                                        
                                        <label class="flex items-center">
                                            <input type="checkbox"
                                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                                wire:model="createApiTokenForm.permissions" value="read">
                                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">referred</span>
                                        </label>
                                        
                                    </div>
                                </div>
                                <!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>

                        <!--[if BLOCK]><![endif]-->
                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('5pjGofHAQP2lCOBJhAfi').on('created', () => { clearTimeout(timeout);
                                shown = true;
                                timeout = setTimeout(() => { shown = false }, 2000); })"
                                x-show.transition.out.opacity.duration.1500ms="shown"
                                x-transition:leave.opacity.duration.1500ms="" style="display: none;"
                                class="text-sm text-gray-600 dark:text-gray-400 me-3">
                                Created.
                            </div>                           

                            <x-button class="ms-4">
                                @lang('dashboard.send_email')
                            </x-button>
                        </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </form>
                </div>
            </div>

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

           
        </div>
    </div>


</div>
