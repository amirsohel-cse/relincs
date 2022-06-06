<div>
    @section('title')
    Saved
    @endsection
    <x-slot name="header">
        {{ __('Saved') }}
    </x-slot>

    {{--
    <pre class="p">{{$united}}</code> --}}
    <div class="w-full">
        {{-- Without Saved Wall --}}
        <div class="flex flex-col justify-center w-full">
            @if (filled($united))
                <div class="w-full relative">
                    <h3 class="text-left font-bold lg:text-2xl text-xl text-gray-700">
                        Wall Saved
                    </h4>
                    <div class="grid lg:grid-cols-4 grid-cols-2 gap-4 place-items-center my-4">
                        @foreach ($united as $mark)
                        @php $show = $this->show_video($mark->video_id); @endphp
                        {{-- Show Wall --}}
                        <div class="flex-none flex flex-col cursor-pointer">
                            <a  href="{{ route('show.wall.feed' , ['video' => $show->uid,]) }}" class="relative flex flex-col justify-center items-center sm:mb-0 mb-3 w-full h-full">
                                <img src="{{ $show->thumbnail_image == null ?  asset($show->path) : asset('video/' . $show->uid . '/' . $show->thumbnail_image) }}"
                                    alt="SamanSayyar"
                                    class=" w-60 h-40 object-cover bg-center  flex items-center justify-center rounded-sm">
                                <a target="_blank" href="{{ route('show.wall.feed' , ['video' => $show->uid,]) }}"
                                    class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                    @if ($show->thumbnail_image == null)
                                    {{-- <svg class="md:w-12 md:h-12 w-8 h-8" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg> --}}
                                    @else
                                    <svg class="md:w-12 md:h-12 w-8 h-8" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    @endif
                                </a>
                                @if ($show->thumbnail_image !== null)
                                <div
                                    class="absolute bottom-0 right-0 flex justify-center items-center text-white text-xs font-medium tracking-wider rounded-full transition ease-in duration-200">
                                    <div class="px-4 py-1 bg-indigo-900">
                                        {{$show->duration}}
                                    </div>
                                </div>
                                @endif
                            </a>
                            <div
                            class="relative  transition-all duration-200 border-b px-2">
                            <div class="flex text-black flex-row h-full w-full justify-between self-center items-center space-y-2"
                                x-show="hover" x-on:mouseout="hover = !hover">
                                <div class="flex items-center space-x-4">
                                    <svg class="md:w-7 md:h-7 w-5 h-5 fill-current text-red-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                    <div class="relative">
                                        <span
                                            class="text-black md:text-lg text-md font-bold">{{ $this->count_like($show) }}</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                        </path>
                                    </svg>
                                    <div class="___class_+?252___">
                                        <span
                                            class="text-black md:text-lg text-md font-bold">{{ $this->count_comments($show) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        <div class="my-2 w-full mx">
                            {{-- {{ json_encode($united)->links() }} --}}
                        </div>
                    </div>
                </div>
            @endif

            @if (filled($profile))
            <div class="w-full relative">
                <h3 class="text-left font-bold lg:text-2xl text-xl text-gray-700">
                    profiles Saved
                </h4>
                <div class="grid lg:grid-cols-4 grid-cols-2 gap-4 place-items-center my-4">
                    @foreach ($profile as $user)
                    @php
                        $data = App\Models\User::find($user->markshod_id);
                        // dd($user->mardshod_id);
                    @endphp
                    {{-- Show Wall --}}
                    <div class="max-w-3xl w-full z-10">
                        <a href="{{route('gu.profile.show' , ['name' => $data->id ])}}" class="flex flex-col">
                            <div class="bg-white border border-white shadow-lg  rounded-lg p-2 m-4">
                                <div class="flex-none  justify-center items-center w-full">
                                    <div
                                        class="relative w-36 h-36"   flex mx-auto justify-center items-center sm:mb-0 mb-3">
                                        <img src="{{ $data->profile() }}" alt="{{$data->username}}"
                                            class="w-full h-full object-cover rounded-2xl">
  
                                    </div>
                                    <div class="flex-auto justify-evenly">
                                        <div class="flex items-center justify-between sm:mt-2">
                                            <div class="flex items-start">
                                                <div class="flex flex-col py-2">
                                                    <div
                                                        class="w-full flex-none text-md text-left text-gray-800 font-base leading-none">
                                                        {{$data->username}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="my-2 w-full mx">
                        {{-- {{ json_encode($united)->links() }} --}}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
