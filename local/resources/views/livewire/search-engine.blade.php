<div class="w-full relative">
    <div class="flex relative justify-center py-4 w-full">
        <div class="bg-white rounded flex lg:w-7/12 w-full py-2 px-4 shadow-md border border-gray-200">
            {{-- <button class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg></button> --}}
            <input type="search" wire:keyup.enter="searchengine()" placeholder="search for users"
                wire:model.debounce.500ms="search"
                class="w-full pl-4 text-sm border-none focus:outline-none bg-transparent">
        </div>
        <div class="z-50 absolute flex lg:w-7/12 w-full mx-auto shadow-md rounded-md justify-start mt-20 inset-0">
            @if (count($results) > 0 || $search == '')
            <div
                class="w-full flex-col overflow-y-scroll h-96 relative  mx-auto shadow-md rounded-md flex flx-col bg-gray-100 items-start space-y-2">
                <div class=""></div>
                @forelse ($results as $result)
                <a href="{{ route('gu.profile.show' , ["name" => $result->id]) }}"
                    class="border-b border-gray-300 px-1 py-2 flex justify-start items-center w-full bg-gray-100">
                    <div class="w-full flex items-center h-full rounded-full">
                        <img class="lg:w-12 w-10 lg:h-12 h-10 object-cove rounded-full" src="{{$result->profile()}}"
                            alt="{{$result->username}}">
                        <div class="w-full ml-3 text-gray-800 lg:text-md text-sm">{{$result->username}}</div>
                    </div>
                </a>
                @empty
                <div class="my-3 px-2 text-white bg-white w-full lg:text-md lg:text-lg">
                    User Not Found :(
                </div>
                @endforelse
            </div>
            @else
            <div class="px-3 py-3">
                No results For {{$search}}
            </div>
            @endif
        </div>
    </div>
</div>
