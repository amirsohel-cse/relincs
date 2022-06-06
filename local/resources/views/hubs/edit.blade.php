<x-app-layout>
    <div class="w-full">
        @section('title')
        edit Hub {{$data->name}}
        @endsection

        <x-slot name="header">
            edit Hub {{$data->name}}
        </x-slot>

        <form class="w-full" action="{{ route('dash.update.hubs',$data->uid) }}" method="POST" enctype="multipart/form-data">
            @method("PATCH")
            @csrf
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="w-full">
                <div class="w-full lg:mb-2">
                    <div
                        class="px-4 py-5 flex lg:flex-col flex-row space-y-3 justify-center items-center rounded-lg  text-center w-full">
                        <div class="mb-4">
                            <img id="display_image" class="lg:w-40 w-36 lg:h-40 h-36 mx-auto rounded-full object-cover object-center"
                                alt="channel file Upload" src="{{env('AWS_BUCKET_URL') .'public/profile_hubs/'. $data->profile}}" />
                        </div>
                        <label class="cursor-pointer lg:mt-6 lg:ml-0 ml-3">
                            <span
                                class="mt-2 leading-normal px-4 py-2 text-gray-800 bg-gray-100 hover:bg-gray-200 transition duration-200 text-sm rounded-full">upload
                                profile hub</span>
                            <input type="file" class="hidden" onchange="preview(event)" id="image" name="profileHubs" />
                        </label>
                    </div>
                </div>
                <br>
                <div class="w-full lg:mt-2">
                    <div class="mt-2 text-sm">
                        <x-label class="text-sm" for="name" :value="__('Name hub')" />
                        <x-input id="name" class="block mt-1 w-full text-sm" type="text" name="name"
                            :value="$data->name" />
                    </div>
                </div>
                <div class="w-full lg:mt-2">
                    <div class="mt-2">
                        <x-label class="text-sm" for="about" :value="__('About')" />
                        <textarea id="about"
                            class="block mt-1 w-full text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            rows="5" name="about" value="{{ old('about') }}">{{ $data->about }}</textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-start items-start mt-3">
                <x-button>Submit</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
