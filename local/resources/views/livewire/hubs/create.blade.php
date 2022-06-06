<div class="w-full">
    @section('title')
    Create new Hub
    @endsection

    @push('scripts')
    <script>
        window.addEventListener('success', () => {
                Swal.fire({
                    icon: 'success',
                    title: 'done Successfully',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
    </script>
    @endpush
    <x-slot name="header">
        {{ __('Create new Hub') }}
    </x-slot>
    <form class="w-full"  wire:submit.prevent="createChannel()" wire:keydown.enter="createChannel()">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="w-full" wire:target="createChannel" wire:loading.class="opacity-50">
            <div class="w-full lg:mb-2">
                <div
                    class="px-4 py-5 flex lg:flex-col flex-row space-y-3 justify-center items-center rounded-lg  text-center w-full">
                    <div class="mb-4">
                        <img class="lg:w-40 w-36 mx-auto rounded-full object-cover object-center" @if($profileHubs)
                            src="{{ $profileHubs->temporaryUrl() }}" @else
                            src="{{ asset('storage/img/channel.jpg') }}" @endif alt="channel file Upload" />
                    </div>
                    <label class="cursor-pointer lg:mt-6 lg:ml-0 ml-3">
                        <span
                            class="mt-2 leading-normal px-4 py-2 text-gray-800 bg-gray-100 hover:bg-gray-200 transition duration-200 text-sm rounded-full">upload
                            profile hub</span>
                        <input type='file' class="hidden" wire:model="profileHubs" />
                    </label>
                </div>
            </div>
            <br>
            <div class="w-full lg:mt-2">
                <div class="mt-2 text-sm">
                    <x-label class="text-sm" for="name" :value="__('Name hub')" />
                    <x-input id="name" class="block mt-1 w-full text-sm" type="text" wire:model="name"
                        :value="old('name')" />
                </div>
            </div>
            <div class="w-full lg:mt-2">
                <div class="mt-2">
                    <x-label class="text-sm" for="about" :value="__('About')" />
                    <textarea id="about"
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        rows="5" wire:model="about" :value="old('about')"></textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-start items-start mt-3">
            <x-button>Submit</x-button>
        </div>
    </form>
</div>