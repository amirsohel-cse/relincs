<div>
    @section('title')
        Latest
    @endsection
    <div class="w-full h-full" x-data="{ search: '', toggleFilter: false }">
        <!-- Find-->
        <div class="relative">
            <div style="background : #80b4be;" class="w-full flex flex-col jusify-center items-center transform">
                <!-- video Hubs search box -->
                <div class="mx-auto w-full flex flex-row justify-between  py-4 z-50">
                    <form wire:submit.prevent="find"
                        class=" bg-white rounded flex  lg:w-6/12 w-full mx-auto  pl-2 py-2 shadow-md border border-gray-200">
                        <button class="bg-white rounded-md -ml-2 px-2 focus:outline-none"
                            @click.prevent="toggleFilter = !toggleFilter"><svg class="w-6 h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                                </path>
                            </svg></button>
                        <input type="text" id="search" placeholder="search Directory..." wire:model.lazy="search"
                            class=" pl-4 text-md outline-none bg-transparent  w-8/12
                            @error('search') border border-red-400  @else border-none @enderror">
                        <select
                            class="px-4 lg:w-32 w-20 lg:text-md text-sm outline-none border-none h-full bg-transparent capitalize
                            @error('type') text-red-400 @enderror"
                            wire:model.defer="type" id="type">
                            <option selected>Type . . .</option>
                            <option value="wall">wall</option>
                            <option value="media">media</option>
                            <option value="hubs">hubs</option>
                        </select>
                        <button
                            class="outline-none focus:outline-none w-16 text-center h-full py-1 flex justify-center items-center">
                            <svg class=" w-6 text-center text-gray-600 h-6 cursor-pointer" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <div x-show="toggleFilter" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-25"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" style="z-index: 999999;"
                    class="flex mx-auto z-50 my-3 items-center justify-center bg-gray-50 max-w-4xl max-h-4xl shadow-md rounded-md  w-full">
                    <div class="max-h-4xl w-full z-50">
                        <div
                            class="flex flex-row justify-between items-center w-full h-10 px-4 py-2 border-b border-gray-300">
                            <div class="">
                                <p class="text-lg font-bold text-gray-900">
                                    Filter
                                </p>
                            </div>
                            <button class="focus:outline-none" @click="toggleFilter = false">
                                <p class="text-lg font-bold text-gray-900">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div class="w-full h-full px-5 py-3 capitalize">
                            <form action="#" class="flex flex-col mt-3" autocomplete="off">
                                <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4 gap-x-3">
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="rating" class="text-sm font-semibold text-gray-700">rating</label>
                                        <select name="rating" id="rating" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date" class="text-sm font-semibold text-gray-700">upload
                                            date</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="latest">latest</option>
                                            <option value="today">today</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date" class="text-sm font-semibold text-gray-700">length
                                            video</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="2min">2 min</option>
                                            <option value="today">10 min</option>
                                            <option value="etc">20 +</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-semibold text-gray-700">quality</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="hd">hd</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-semibold text-gray-700">language</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="english">english</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Find -->
        <div class="mx-auto container md:px-6 px-2 py-6 mb-10 flex flex-col justify-center z-10 relative">
            <div class="my-6 md:px-2 px-3">
                <div class="w-full " wire:target="find" wire:loading.class="hidden">
                    <div class="my-4 mx-auto flex justify-center items-center flex-col">
                        @if ($result === null || $result->count() === 0)
                            
                        @else
                            @if ($type == 'wall')
                                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 place-items-center">
                                    @foreach ($result as $item)
                                        <x-card-wall :data="$item" />
                                    @endforeach
                                </div>
                            @elseif($type == 'media')
                                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 place-items-center w-full">
                                    @foreach ($result as $trending)
                                        <x-card-media :data='$trending' :is='2' />
                                    @endforeach
                                </div>
                            @elseif($type == 'hubs')
                                @foreach ($result as $i)
                                    <div class="max-w-3xl w-full z-10">
                                        @php
                                            $joiner = App\Models\Join::where('joining_id', $i->id)->count();
                                        @endphp
                                        <a href="{{ route('show.hubs', $i->uid) }}" class="flex flex-col">
                                            <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div
                                                        class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                        <img src="{{ asset('storage/storage/profile_hubs/' . $i->profile) }}"
                                                            alt="SamanSayyar"
                                                            class=" w-32 h-32 object-cover  rounded-2xl">
                                                        <!-- <a href="#"
                                                        class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-4 w-4">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                            </path>
                                                        </svg>
                                                    </a> -->
                                                    </div>
                                                    <div class="flex-auto sm:ml-5 justify-evenly">
                                                        <div class="flex items-center justify-between sm:mt-2">
                                                            <div class="flex items-center">
                                                                <div class="flex flex-col">
                                                                    <div
                                                                        class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                        {{ $i->name }}</div>
                                                                    <div class="flex-auto text-sm text-gray-500 my-1">
                                                                        <span class="mr-3 ">
                                                                            {{ $i->about }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <div class="flex">
                                                                @include('includes.avgstars', [
                                                                    'i' => $i,
                                                                ])
                                                            </div>

                                                        </div>
                                                        <div class="flex pt-2  text-sm text-gray-500">
                                                            <div class="flex-1 inline-flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                                    </path>
                                                                </svg>
                                                                <p class="___class_+?380___">{{ $joiner }}
                                                                    Audience</p>
                                                            </div>
                                                            {{-- <div class="flex-1 inline-flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="___class_+?383___">14 Components</p>
                                                </div> --}}
                                                            @livewire('join', ['user_id' => $i->user_id])
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                    </div>

                </div>
            </div>
            <div class="w-full" wire:target="find" wire:loading>
                <x-loading classSvg="w-12 h-12" classText="text-xl" />
            </div>
        </div>
    </div>
    <div class="w-full" wire:ignore>
        <div class="lg:px-10 px-0 py-4 w-full ">
            <div class="my-4 pb-8">
                <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Wall</h2>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper w-full mx-auto">
                    @foreach ($wall_data as $trending)
                        <x-card-wall :data='$trending' :is='1' />
                    @endforeach
                </div>
                <!-- Right -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        @if ($setting->show_latest_page_media == 1)
            <div class="lg:px-10 px-0 py-4 w-full ">
                <div class="my-4 pb-8">
                    <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Media</h2>
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper w-full mx-auto">
                        @foreach ($show_data as $trending)
                            <x-card-media :data='$trending' :is='1' />
                        @endforeach
                    </div>
                    <!-- Right -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        @endif

        <div class="p-10 w-full">
            <p class="text-xl ml-10 font-extrabold leading-none text-gray-600 py- text-center mb-2 pb-8 w-full">See
                latest
                Hubs</p>

            <ul class="grid lg:grid-cols-5 grid-cols-2 gap-6">
                @foreach ($hubs_data as $data)
                    <li class="flex flex-col items-center space-y-1 ">
                        <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                            <a href="{{ route('show.hubs', $data->uid) }}"
                                class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                                <img class="h-32 w-32 rounded-full"
                                    src="{{ env('AWS_BUCKET_URL').'public/profile_hubs/'.$data->profile }}"
                                    alt="cute kitty" />
                            </a>
                        </div>
                        <a href="{{ route('show.hubs', $data->uid) }}" class="font-pop">
                            {{ $data->name }}
                        </a>
                    </li>
                @endforeach
                <li class="flex flex-col items-center space-y-1 ">
                    <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                        <a href="{{ route('gu.ehubs') }}"
                            class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                            <svg class="w-32 h-32 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <a href="#">
                        See more
                    </a>
                </li>
            </ul>
        </div>

    </div>
    @push('script')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            window.addEventListener('ErrorLength', () => {
                Swal.fire({
                    icon: 'error',
                    // position: 'top-end',
                    title: 'Empty Search Box',
                    showConfirmButton: false,
                    timer: 1300
                })
            });
            window.addEventListener('notFound', () => {
                Swal.fire({
                    icon: 'info',
                    // position: 'top-end',
                    title: 'Not Found :(',
                    showConfirmButton: false,
                    timer: 1300
                })
            });
        </script>
    @endpush
</div>
