<div class="w-full">
    @section('title')
        My Followers
    @endsection

    <div class="w-full">
        <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize max-w-full">
            <a class="md:px-6 px-5 w-full mx-2 md:py-2 py-2 border border-gray-200 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                href="#" :class="{ 'bg-gray-200': tab_followes === 'followers' }" @click="tab_followes = 'followers'">
                <div class="___class_+?4___">Followers</div> &nbsp;
            </a>
            <a class="md:px-6 px-5 w-full mx-2 md:py-2 py-2 border border-gray-200 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                href="#" :class="{ 'bg-gray-200': tab_followes === 'following' }" @click="tab_followes = 'following'">
                <div class="___class_+?6___">following</div> &nbsp;
            </a>
        </nav>
        <div x-show="tab_followes === 'followers'" x-transition
            class="flex justify-center mx-auto w-full items-center flex-col">
            <div class="relative w-full max-w-4xl focus-within:text-indigo-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-indigo-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Search in followers" aria-label="Search" />
            </div>
            <div class="mb-6 mt-10 w-full mx-auto ">
                <div class="flex flex-col w-full space-y-10 bg-opacity-25 max-w-4xl rounded-md px-3 py-2 mx-auto">
                    {{-- {{$followers}} --}}
                    {{-- {{dd($followers)}} --}}
                    @foreach ($followers as $f)
                        @foreach (App\Models\User::where('id', $f->follow_id)->get() as $i)
                            <a target="_blank" href="{{ route('gu.profile.show', ['name' => $i->id]) }}"
                                class="w-full">
                                <div class="flex justify-between items-center w-full">
                                    <div class="flex justify-center items-center w-full">
                                        <div class="relative md:w-14 md:h-14 w-12 h-12">
                                            <img src="{{ $i->profile() }}"
                                                alt="{{ $i->username }}"
                                                class="object-cover rounded-full w-full h-full">
                                        </div>
                                        <div class="w-full ml-5">
                                            <p class="text-md font-medium">
                                                {{ $i->username }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full h-full items-center flex justify-end mr-4">
                                        <div
                                            class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                            @livewire('following', ['user_id' => $i->id])
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

        <div x-show="tab_followes === 'following'" x-transition
            class="flex justify-center mx-auto w-full items-center flex-col">
            <div class="relative w-full max-w-4xl focus-within:text-indigo-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-indigo-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Search in followers" aria-label="Search" />
            </div>
            <div class="mb-6 mt-10 w-full mx-auto ">
                <div class="flex flex-col w-full space-y-10 bg-opacity-25 max-w-4xl rounded-md px-3 py-2 mx-auto">
                    {{-- {{$followers}} --}}
                    {{-- {{dd($followers)}} --}}
                    @foreach ($following as $ff)
                        @foreach (App\Models\User::where('id', $ff->following_id)->get() as $i)
                            <a target="_blank" href="{{ route('gu.profile.show', ['name' => $i->id]) }}"
                                class="w-full">
                                <div class="flex justify-between items-center w-full">
                                    <div class="flex justify-center items-center w-full">
                                        <div class="relative md:w-14 md:h-14 w-12 h-12">
                                            <img src="{{ $i->profile() }}"
                                                alt="{{ $i->username }}"
                                                class="object-cover rounded-full w-full h-full">
                                        </div>
                                        <div class="w-full ml-5">
                                            <p class="text-md font-medium">
                                                {{ $i->username }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full h-full items-center flex justify-end mr-4">
                                        <div
                                            class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                            @livewire('following', ['user_id' => $i->id])
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
