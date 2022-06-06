<div class="p-2" >
    <!-- System Comment -->
    {{-- {{dd($comments);}} --}}
    @foreach ($comments as $comment)
        <div class="flex justify-start flex-col space-y-3 items-start px-2 border-b border-gray-100"
            x-data="{
                 replies : false,
                 openReplay : false,
                 }">
            <div class="relative mt-1 mb-3 pt-2 flex">
                <div class="mr-2">
                    <img src="{{ $comment->user->profile() }}" alt="saman sayyar"
                        class="w-9 h-9 rounded-full object-cover">
                </div>
                <div class="ml-2 w-full">
                    <p class="text-gray-600 md:text-sm text-xs w-full">
                        <!-- Username User -->
                        <span class="font-normal text-gray-900">{{ $comment->user->username }} ~ </span>
                        <!-- Username User -->
                        {{ $comment->body }}
                    </p>
                    <div class="flex space-x-4">
                        <div class="time mt-1 text-gray-400 text-xs">
                            <p>{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    {{-- <div class="flex space-x-4">
                        <div class="time mt-1 text-gray-400 text-xs">
                            <p>{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        <button @click.prevent="openReplay = !openReplay" type="button" class="focus:outline-none time mt-1 text-gray-400 text-xs">
                            <p>replay</p>
                        </button>
                    </div> --}}

                    {{-- <div x-show="openReplay" x-transition>
                        @livewire('replaycomments' , [
                        'video' => $video,
                        'col' => $comment->id,
                        'key' => $comment->id . uniqid(),
                        ])
                    </div> --}}

{{-- 
                        <div x-show="replies" x-transition>
                            @include('includes.recursive' , ['comments' => $comment->Replaies])
                        </div> --}}

                        {{-- <div x-show="replies" x-transition
                    class="flex justify-start flex-col space-y-3 items-start px-2 border-b border-gray-100">
                    <div class="relative mt-1 mb-3 pt-2 flex">
                        <div class="mr-2">
                            <img src="{{asset('storage/img/samansayyar.jpg')}}" alt="saman sayyar"
                                class="w-8 h-8 rounded-full object-cover">
                        </div>
                        <div class="ml-2 w-full" x-data="{ replies : true }">
                            <p class="text-gray-600 md:text-sm text-xs w-full">
                                <!-- Username User -->
                                <span class="font-normal text-gray-900">samansayyar</span>
                                <!-- Username User -->
                                You Can see?
                            </p>
                            <div class="flex space-x-4">
                                <div class="time mt-1 text-gray-400 text-xs">
                                    <p>2d</p>
                                </div>
                                <button type="button"
                                    class="focus:outline-none time mt-1 text-gray-400 text-xs">
                                    <p>replay</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    @endforeach
{{-- 
    <button wire:click.prevent="load_more_comments()" type="button" class="focus:outline-none m-auto rounded-full shadow-md bg-indigo-600 px-2 py-2 flex justify-center items-center">
        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path></svg>
    </button> --}}
</div>
