@props(['data'])
@php
$user_data = App\Models\User::select('image_profile','username')->find($data->user_id);
@endphp

<div class="w-full">

    <div class="w-full flex justify-center ">
        <div
            class="text-left w-full border border-gray-200 space-y-2 transition transform hover:shadow-lg duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
            <div
                class="w-full pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                <a href="{{  route('watch.hubs.media', $data->uid) }}" class="w-full">
                    <img src="{{ env('AWS_BUCKET_URL').'hubs/media/'.$data->uid.'/'.$data->thumbnail_image }}" alt="post"
                         class="object-cover  w-96 h-60 rounded shadow-md">
                </a>
                <a href="{{  route('watch.hubs.media', $data->uid) }}"
                    class="flex pb-3 pl-1 mt-2 justify-center items-center flex-row">
                    <div class="flex justify-start space-x-3 items-center">
                      <img src="{{ $user_data->profile() }}"
                            alt="{{$data->username}}" class="object-cover h-9 w-9 rounded-full shadow-md">
                        <div class="flex justify-start">
                            <div class="font-pop text-gray-700 text-sm text-left font-bold">
                                {{$data->title}}
                            </div>
                        </div>
                    </div>
                </a>
                <div class="ml-14 flex flex-col justify-start items-start pb-4">
                    <div class="text-left">
                        <a class="md:text-sm text-xs text-gray-500 text-left">
                            {{$data->username}}
                        </a>
                    </div>
                    <div class="w-full">
                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                            {{$data->views}} views &nbsp; &bullet; &nbsp;
                            {{$data->created_at->diffForHumans()}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
