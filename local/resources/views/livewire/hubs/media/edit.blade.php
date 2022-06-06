<div class="w-full">
    @section('title')
    Edit media
    @endsection

    <x-slot name="header">

        {{ 'Edit media '.$hubmedia->title }}

    </x-slot>

    <div class="w-full" wire:target="update" wire:loading.class="opacity-50">
        <form wire:submit.prevent="update">
            <div class="relative flex flex-col w-full md:px-10 px-3" @if ($this->hubmedia->processed_persentage < 100)
                    wire:poll @endif>
                    <div class=" flex w-full flex-col space-y-3">
                        <div class="flex justify-between items-center w-full mb-3">
                            <div class="w-5/12">
                                Cover Video :
                                <img src="{{ $cover ? $cover->temporaryUrl() : asset($this->hubmedia->getThumbnailAttribute()) }}"
                                    alt="{{ $this->hubmedia->title }}" class="w-96 h-60 object-cover">
                            </div>
                            <div class="w-4/12">
                                    <label for="cover">Change Cover Video : 
                                        {{-- <img src="{{ $cover->temporaryUrl() }}" class="w-60 mx-2"> --}}
                                        
                                    </label>
                                    <input type="file" wire:model="cover" id="cover">
                            </div>
                            <div class=" flex flex-col w-3/12">
                                <p class="text-gray-600 font-base">
                                    Processeing
                                    <span class="font-medium text-gray-600">({{ $this->hubmedia->processed_persentage
                                        }})%</span>
                                </p>
        
                            </div>
                        </div>

                    </div>
                    <div class="grid lg:grid-cols-2 grid-cols-1 align-content-center  gap-6 w-full">
                        <div class=" flex w-full flex-col space-y-3">
                            <x-label for="title" :value="__('title post')" />
                            <x-input id="title" class="block mt-2 w-full" type="text" wire:model="hubmedia.title"
                                required autocomplete="current-title" />
                            @error('media.title')
                            <div class="text-xs text-red-500 font-bold mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class=" flex w-full flex-col space-y-3">
                            <div>
                                <x-label for="visibility" :value="__('visibility')"></x-label>
                                <select wire:model="hubmedia.visibility" id="visibility" autofocus
                                    class="px-4 py-2 mt-2 w-full bg-transparent transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                    <option value="private">private</option>
                                    <option value="public">public</option>
                                    <option value="unslited">unlisted</option>
                                </select>
                            </div>
                            @error('media.visibility')
                            <div class="text-xs text-red-500 font-bold mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="relative flex w-full flex-col space-y-3">
                        <div class="block mt-4 text-xs">
                            <x-label for="description" :value="__('description')"></x-label>
                            <textarea
                                class="block w-full mt-2 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="5" id="description" placeholder="Enter some long form content for post."
                                wire:model="hubmedia.description"></textarea>
                        </div>
                        @error('media.description')
                        <div class="text-xs text-red-500 font-bold mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>

            <div class="relative my-3 mt-8 md:mx-10">
                <div>
                    <button
                        class="flex items-center justify-between px-4 py-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-purple">
                        <span class="mx-2">Upload</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        {{-- <div
            class="min-h-screen w-full z-40 bg-gray-900 text-white bg-opacity-50 absolute top-0 left-0 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
                <div class="la-ball-pulse-sync la-light my-60 la-2x">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p
                    class="text-3xl text-gray-50 sans-normal capitalize z-50 font-bold flex justify-center items-center w-full">
                    loading...</p>
            </div>
        </div> --}}

    </div>


    @push('scripts')
    <script>
        window.addEventListener('media_updated', () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Successfull File Updated',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
    </script>
    @endpush
</div>
