<div class="w-full">
    <form wire:submit.prevent="upload">
        <div class="flex justify-center items-center mx-auto w-full" wire:target="upload" wire:loading>
            <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

                <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
                    <path clip-rule='evenodd'
                        d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                        fill='currentColor' fill-rule='evenodd' />
                </svg>


                <div>Loading...</div>
            </div>
        </div>
        <div class="relative flex flex-col w-full md:px-10 px-3">
            <div class="grid md:grid-cols-2 grid-cols-1 align-content-center  gap-6 w-full">
                <div class="relative my-3 mb-3 col-span-2" x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                    {{-- Add Progress --}}
                    <div class="w-full" x-show="isUploading">
                        <p class="text-indigo-600 text-lg font-bold text-center" x-text="progress"></p>
                        <div class="w-full overflow-hidden">
                            <div class="w-1/2 inline-block relative  fluentProgressBar-waiting"></div>
                        </div>
                    </div>
                    <div class="">
                        <x-label for="profile" :value="__('your file')"></x-label>
                        <div class="grid lg:grid-cols-2 grid-cols-1 justify-center w-full mt-4 gap-4">
                            <div class="">
                                <label class="flex flex-col rounded-lg border-4 bg-white border-dashed w-full h-60 p-10 group text-center
                                            @error('filevideo') border-red-400  @enderror">
                                    <div
                                        class="h-full w-full text-center flex flex-col items-center justify-center bg-white">
                                        @if ($filevideo)
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-10 h-10 text-green-400 group-hover:text-green-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pointer-none text-green-400"><span class="text-sm">
                                                Uploaded
                                        </p>
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-10 h-10 text-indigo-400 group-hover:text-indigo-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pointer-none text-gray-500 ">
                                         Upload file
                                        <div class="text-indigo-500" class="text-indigo-600 hover:underline">select a
                                            file</div> <span class="text-gray-500"> from your local</span>
                                        </p>
                                        @endif
                                    </div>
                                    <input class="hidden" wire:model="filevideo" id="profile" type="file">
                                </label>
                                @error('filevideo')
                                <div class="text-sm text-red-500 font-bold mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="w-full flex flex-col">
                                @if ($filevideo)
                                @if(str_contains($filevideo->temporaryUrl(),'.mp4'))
                                    <iframe src="{{ $filevideo->temporaryUrl() }}" frameborder="0" class="w-full h-80"></iframe>
                                @else
                                    <img src="{{ $filevideo->temporaryUrl() }}" class="w-full object-cover h-80">
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full flex-col space-y-3 itsems-center">
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
                            <option>Select</option>
                            <option value="private">private</option>
                            <option value="public">public</option>
                            <option value="unslited">unslited</option>
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
                        rows="5" id="description" placeholder="description"
                        wire:model="description"></textarea>
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
                    class="flex items-center justify-between px-4 py-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
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
</div>
