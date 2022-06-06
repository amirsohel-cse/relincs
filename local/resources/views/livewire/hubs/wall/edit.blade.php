<div class="w-full">
    @section('title')
    Edit wall {{$data->title}}
    @endsection

    <x-slot name="header">

        Edit Video {{$data->title }}

    </x-slot>

    @push('scripts')
    <script>
        window.addEventListener('wallEdit_uploaded', () => {
                    Swal.fire({
                    icon : 'success',
                    title: 'Successfully',
                    showConfirmButton: false,
                    background: '#D1F1E5',
                    timer: 1500
                })
                });
    
    </script>
    @endpush
    <div class="w-full">
        <form wire:submit.prevent="update">
            <div class="flex justify-center items-center mx-auto w-full " wire:target="update" wire:loading>
                <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

                    <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32"
                        xmlns='http://www.w3.org/2000/svg'>
                        <path clip-rule='evenodd'
                            d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                            fill='currentColor' fill-rule='evenodd' />
                    </svg>


                    <div>Loading...</div>
                </div>
            </div>
            <div class="relative flex flex-col w-full md:px-10 px-3" wire:target="update" wire:loading.class="hidden">
                <div class="grid md:grid-cols-2 grid-cols-1 align-content-center  gap-6 w-full">

                    <div class="flex w-full col-span-2 space-y-3 flex-col itsems-center">
                        <x-label for="image" :value="__('image')" />

                        <img class="w-80 imag-fluid my-4" src="{{$data->getThumbnailAttribute()}}" alt="">
                    </div>

                    
                    <div class=" lg:col-span-1 col-span-2 flex w-full flex-col space-y-3 itsems-center">
                        <x-label for="title" :value="__('title post')" />

                        <x-input id="title" class="block mt-2 w-full" type="text" wire:model="title" required
                            autocomplete="current-title" />
                        @error('title')
                        <div class="text-xs text-red-500 font-bold mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="lg:col-span-1 col-span-2 flex w-full flex-col space-y-3">
                        <div>
                            <x-label for="visibility" :value="__('visibility')"></x-label>
                            <select wire:model="visibility" id="visibility" autofocus
                                class="px-4 py-2 mt-2 w-full bg-transparent transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                {{-- <option value="null">select</option> --}}
                                <option value="public" @if($visibilityd == 'public') selected   @endif >public</option>
                                <option value="private" @if($visibilityd == 'private') selected   @endif >private</option>
                                <option value="unslited" @if($visibilityd == 'unslited') selected   @endif >unslited</option>
                            </select>
                        </div>
                        @error('visibility')
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
                            wire:model="description">{{$description ?? null}}</textarea>
                    </div>
                    @error('description')
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
                        <span class="mx-2">update</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
        {{-- <div   wire:loading>
            <div class="flex justify-center items-center mx-auto w-full">
                <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

                    <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32"
                        xmlns='http://www.w3.org/2000/svg'>
                        <path clip-rule='evenodd'
                            d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                            fill='currentColor' fill-rule='evenodd' />
                    </svg>


                    <div>Loading...</div>
                </div>
            </div>
        </div> --}}

</div>