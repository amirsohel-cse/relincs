
            <div class="w-full bg-white h-full p-1 rounded-md shadow-xl" >
                <div class="flex items-center justify-between space-x-1">
                    <div :class="{ 'bg-indigo-200': tab_follow === 'Followers' }" @click.prevent="tab_follow = 'Followers'"
                        class="w-full text-gray-900 bg-gray-100 cursor-pointer hover:bg-indigo-200 transition duration-100 px-3 rounded-md shadow-sm py-3 text-center lg:text-md text-sm">
                       Followers</div>
                    <div :class="{ 'bg-indigo-200': tab_follow === 'Following' }"  @click.prevent="tab_follow = 'Following'"
                        class="w-full text-gray-900 bg-gray-100 cursor-pointer hover:bg-indigo-200 transition duration-100 px-3 rounded-md shadow-sm py-3 text-center lg:text-md text-sm">
                      Following</div>
                </div>
                <div  x-show="tab_follow === 'Followers'">
                    <div id="journal-scroll"
                        class="mt-2 lg:text-md w-full text-sm px-1 py-1 flex flex-col space-y-2 h-96 overflow-y-scroll">
                        @forelse ($followers as $item)
                        @php
                            $user = App\Models\User::find($item->follow_id);
                        @endphp
                            <div class="flex justify-between items-center py-1 pl-2 w-full">
                                <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}" class="flex justify-start items-center">
                                    <div class="w-14 rounded-full">
                                        <img class="w-full h-full object-cover rounded-full"
                                            src="{{ $user->profile() }}"
                                            alt="pic-1">
                                    </div>
                                    <div class="flex items-center w-full ml-2 text-gray-600  lg:text-md text-sm">
                                        {{ $user->username }}</div>
                                </a>
                                <div class="flex justify-end w-full py-1 pr-2">
                                    {{-- <button
                                        class="py-1 lg:px-6 px-4 hover:bg-indigo-800 lg:text-sm text-xs rounded-md shadow-md bg-indigo-600 text-white">Follow</button> --}}
                                    @livewire('following', ['user_id' => $user->id])
                                </div>
                            </div>
                            @empty
                            <div class="px-3 py-3 text-center text-md">
                                User Not Found :(
                            </div>
                        @endforelse
                    </div>
                </div>

                <div  x-show="tab_follow === 'Following'">
                    <div id="journal-scroll"
                        class="mt-2 lg:text-md text-sm px-1 py-1 flex flex-col space-y-2 h-96 overflow-y-scroll">
                        @forelse ($following as $item)
                        @php
                            $user = App\Models\User::find($item->following_id);
                        @endphp
                            <div class="flex justify-between items-center py-1 pl-2 w-full">
                                <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}" class="flex justify-start items-center">
                                    <div class="w-14 rounded-full">
                                        <img class="w-full h-full object-cover rounded-full"
                                            src="{{ $user->profile() }}"
                                            alt="pic-1">
                                    </div>
                                    <div class="flex items-center w-full ml-2 text-gray-600  lg:text-md text-sm">
                                        {{ $user->username }}</div>
                                </a>
                                <div class="flex justify-end w-full py-1 pr-2">
                                    {{-- <button
                                        class="py-1 lg:px-6 px-4 hover:bg-indigo-800 lg:text-sm text-xs rounded-md shadow-md bg-indigo-600 text-white">Follow</button> --}}
                                    @livewire('following', ['user_id' => $user->id])
                                </div>
                            </div>
                            @empty
                            <div class="px-3 py-3 text-center text-md">
                                User Not Found :(
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
