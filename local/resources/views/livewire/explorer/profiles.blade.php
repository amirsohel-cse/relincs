@section('title')
Explorer - profiles
@endsection

<div class="w-full mx-auto">
    <div class="relative lg:px-4 px-1 w-full flex justify-center items-center flex-col">
        <div class="my-4 md:px-4 px-2 grid lg:grid-cols-2 grid-cols-1 gap-3 w-full">
            @forelse ($users as $user)
            <div class="w-full z-10">
                <div class="flex flex-col">
                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                        <div class="flex-none sm:flex justify-center items-center">
                            <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}"
                                class="relative lg:h-32 lg:w-32 w-full h-full flex mx-auto justify-center items-center sm:mb-0 mb-3">
                                @if($user->gender == "other")
                                <img src="{{ $user->profile() }}" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';" alt="{{$user->username}}"
                                    class=" w-32 h-32 object-cover rounded-2xl">
                                @endif
                                @if($user->gender == "male")
                                <img src="{{ $user->profile() }}" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a1ba11cb025nayeemuzaman.png';" alt="{{$user->username}}"
                                    class=" w-32 h-32 object-cover rounded-2xl">
                                @endif
                                @if($user->gender == "female")
                                <img src="{{ $user->profile() }}" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62aa0e7031d4bAmir.png';" alt="{{$user->username}}"
                                    class=" w-32 h-32 object-cover rounded-2xl">
                                @endif

                                <!-- <a href="#"
                                                class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                    class="h-4 w-4">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a> -->
                            </a>
                            <div class="flex-auto sm:ml-5 justify-evenly">
                                <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}" class="flex items-center justify-between sm:mt-2">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">
                                            <div
                                                class="w-full flex-none lg:text-left text-center text-lg text-gray-800 font-bold leading-none">
                                                {{$user->username}}</div>
                                            <div class="flex-auto text-sm text-gray-500 mt-3 my-1">
                                                <!--{{$user->about ?? null}}-->
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="flex lg:flex-row flex-col w-full text-sm text-gray-500">
                                    <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}" class="flex justify-center w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                            </path>
                                        </svg>
                                        <p class="w-full">{{$this->count_followers($user->id)}} Followers</p>
                                    </a>
                                    <!-- <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <p class="___class_+?488___">14 Components</p>
                                                    </div> -->
                                    <div class="w-full flex flex-col justify-end items-center mt-4">
                                        @livewire('following', ['user_id' => $user->id])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="p-3 my-2 text-gray-500 text-center mx-auto">Profile not Found :(</div>
            @endforelse
        </div>
        <div class="lg:w-6/12">
            {{$users->links('vendor.pagination.simple-tailwind')}}
        </div>

    </div>
</div>
