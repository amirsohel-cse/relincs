<div class="w-full">
    <div class="flex items-center justify-between">
        <span class="font-bold lg:text-lg text-md">Notifications</span>
        <button x-on:click="isNotification = !isNotification"
            class="bg-red-200 transition duration-200 hover:text-red-900 text-red-400 hover:bg-red-300 p-2 rounded-full focus:outline-none">
            <svg class="h-3 w-3 fill-current" viewBox="0 0 20 20">
                <path
                    d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
            </svg>
        </button>
    </div>
    <ul class="w-full mt-2">
        <div class="addevent px-4">
            @foreach(Auth::user()->Notifications as $notification)
            @if ($notification->data['type'] === 'like')
            <li class="flex w-full border-b pb-1 mt-1">
                <div class="flex items-center hover:bg-gray-100 rounded-lg px-1 py-1 cursor-pointer">
                    <div class="flex flex-shrink-0 items-end relative">
                        <a title="go to profile"
                            href="{{ route('gu.profile.show', ['name' => $notification->data['from_id']]) }}"
                            class="w-full">
                            <img class="h-14 w-14 rounded-full"
                                src="{{ asset('storage/profile_image/'.$notification->data['image_profile']) }}"
                                alt="{{$notification->data['username']}}">
                        </a>
                        <div
                            class="absolute bottom-0 bg-red-200 right-0 border shadow-lg rounded-full border-gray-300 bg-white p-1 flex justify-center items-center">
                            <svg class="lg:w-8 lg:h-8 w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-3">
                        <span class="font-medium text-sm">{{$notification->data['title'] }}</span>
                        <p class="lg:text-sm text-sm text-bold">
                            {{$notification->data['username'].','.$notification->data['message'] }}</p>
                        <span
                            class="text-xs text-blue-900 text-opacity-60 font-semibold">{{$notification->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </li>
            @elseif($notification->data['type'] === 'comment')
            <li class="flex w-full border-b pb-1 mt-1">
                <div class="flex items-center hover:bg-gray-100 rounded-lg px-1 py-1 cursor-pointer">
                    <div class="flex flex-shrink-0 items-end relative">
                        <a title="go to profile"
                            href="{{ route('gu.profile.show', ['name' => $notification->data['from_id']]) }}"
                            class="w-full">
                            <img class="h-14 w-14 rounded-full"
                                src="{{ asset('storage/profile_image/'.$notification->data['image_profile']) }}"
                                alt="{{$notification->data['username']}}">
                        </a>
                        <div
                            class="absolute bottom-0 right-0 border bg-indigo-200 shadow-lg rounded-full border-gray-300 bg-white p-1 flex justify-center items-center">
                            <svg class="lg:w-8 lg:h-8 w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-3">
                        <span class="font-medium text-sm">{{$notification->data['title'] }}</span>
                        <p class="lg:text-sm text-sm text-bold">
                            {{$notification->data['username'].','.$notification->data['message'] }}</p>
                        <span
                            class="text-xs text-blue-900 text-opacity-60 font-semibold">{{$notification->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </li>
            @endif
            @endforeach
        </div>
    </ul>
</div>
