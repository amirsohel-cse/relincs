<div class="w-full" >
    <!-- comment form -->
    <div class="border border-gray-300 rounded-md py-1 mt-4 bg-gray-50">
        <form class="w-full rounded-lg px-4 py-2" wire:submit.prevent="addComment()">
            <div class="flex flex-wrap mx-3 mb-3" wire:target="addComment" wire:loading.class="opacity-50">
                <div class="flex mx-3 justify-start items-center">
                @if(session()->has('success'))
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm text-green-600 lg:text-lg px-4 pt-3 pb-2 font-medium">{{ session('success')}}
                    </p>
                    @else
                    <h2 class="px-4 -mx-3 pt-3 pb-2 text-gray-600 font-medium text-md">add new Comment</h2>
                    @endif
                </div>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <textarea rows="6"
                        class="bg-gray-100 rounded border border-gray-200 text-sm  @error('comment') border-red-400  placeholder-gray-400 @enderror leading-normal resize-none w-full py-2 px-3 font-medium placeholder-gray-600 focus:outline-none focus:bg-white"
                        wire:model.lazy="comment" placeholder='Type Your Comment' required></textarea>
                </div>
                <div class="w-full flex px-3">
                    <div class="flex items-start w-full text-gray-600 px-2 mr-auto">
                        @error('comment')
                        <svg fill="none" class="w-5 h-5 text-red-500 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs text-red-500 md:text-sm pt-px">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="-mr-1">
                        <button
                            class="bg-indigo-700 transition duration-200 text-gray-50 font-medium py-1 px-4 border border-indigo-500 rounded-lg tracking-wide mr-1 hover:bg-gray-800">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- Show Comment --}}

    <div class="antialiased w-full mt-3">
        <h3 class="mb-4 lg:text-xl text-lg font-medium text-gray-900">Comments</h3>

        <div class="space-y-4" >
            {{-- @php
           $commentss=json_encode($comments);
            @endphp --}}
            @foreach ($com as $i)
            @php
            $user=App\Models\User::select('image_profile','username')->find($i->user_id);
            @endphp
            <div class="flex">
                <div class="flex-shrink mr-3">
                    <img class="mt-2 rounded-full w-10 h-10 sm:w-12 sm:h-12"
                        src="{{ asset($user->profile()) }}" alt="">
                </div>
                <div
                    class="flex-1 bg-gray-100 border border-gray-200 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ $user->username }}</strong> <span class="text-xs text-gray-400">{{ $i->created_at->diffForHumans() }}</span>
                    <p class="text-sm my-1 mt-1">
                       {{ $i->body}}
                    </p>
                    <div class="mt-4 flex justify-between w-full items-center">
                        <div class="text-sm text-gray-500 font-medium">
                            {{-- 0 Replies --}}
                        </div>
                        <div class=""></div>
                        {{-- <button wire:click="$emit('delete')" class="text-md font-normal rounded-full hover:text-white px-2 py-2 bg-red-100 hover:bg-gray-800 transition duration-200 flex justify-center items-center">
                            <svg class="w-6 h-6 text-red-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            <span class="ml-1 text-sm text-red-500 hover:text-white">delete comment</span>
                        </button> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="my-2 mt-4">
            {{$com->Links()}}
        </div>
    </div>
</div>
