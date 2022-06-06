@props(['data','user'])
{{-- {{dd($data,$user)}} --}}
<div class="w-full">
    <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
        <a href="{{ route("gu.profile.show" , $user->id) }}" class="lg:w-32 lg:h-32 rounded-full shadow ring-2 ring-indigo-600 mr-2 flex-shrink">
            <img class="p-2 rounded-full object-cover w-full h-full" src="{{ $user->profile() }}">
        </a>
        <div class="p-2 flex-grow">
            <header>
                <a href="{{ route("gu.profile.show" , $user->id) }}" class="text-black no-underline">
                    <span class="font-medium">{{$user->username}}</span>
                </a>
                <div class="text-xs text-grey flex items-center my-1">
                    {{-- <span class="font-base text-gray-500 text-xs">{{$data->name}}</span> --}}
                    &nbsp;
                    &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-4 w-4 mr-1 feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>{{$data->created_at->diffForHumans()}}</span>
                </div>
            </header>
            {{-- <article class="py-4 text-gray-800 leading-normal  font-article">
                Lorem ipsum no lo se dolores ametandum no come,
                astare pero canime perferme <a class="no-underline text-indigo-600"
                    href="#">@samansayyar</a>
            </article> --}}
            <article class="py-4 text-gray-800 leading-normal  font-article">
                {{$data->title}}
            </article>
            <footer class="border-t border-grey-lighter text-sm flex">
                <button id="shareButton"
                    class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                    <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    <span class="ml-1" >share</span>
                </button>
            </footer>
        </div>
    </div>
    <div class="hidden" id="modal_share" wire:ignore>
        <x-share-button :title='$data->title' />
    </div>
    <script src="{{ asset('js/share.js') }}"></script>
</div>
