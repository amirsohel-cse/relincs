<x-app-layout>
    @section('title')
     identity
    @endsection

    <x-slot name="header">

            {{ __('identity') }}

    </x-slot>
    <div class="w-full">
        <div class="flex flex-col justify-center w-full">
            <div class="flex md:flex-row flex-col items-center justify-between w-full md:space-x-8">

                    <div class="w-full">
                        <x-label for="name" :value="__('first name')" />

                        <x-input id="name" class="block mt-1 w-full"
                                        type="text"
                                        placeholder="{{__('first name')}}"
                                        name="fname"
                                        required autocomplete="current-title" />
                    </div>

                    <div class="w-full">
                        <x-label for="name" :value="__('last name')" />

                        <x-input id="name" class="block mt-1 w-full"
                                        type="text"
                                        placeholder="{{__('last name')}}"
                                        name="lname"
                                        required
                                        autocomplete="current-title" />
                    </div>
            </div>
            <div class="mt-3">
                <div class="w-full">

                    <div class="flex space-x-1">
                        <x-label for="username" :value="__('username')"></x-label><small
                        class="text-indigo-500 text-xs mb-1">&nbsp; Optinal</small>
                    </div>

                   <x-input id="username" class="block mt-1 w-full"
                   type="text"
                   placeholder="{{__('username')}}"
                   name="username"
                   required
                   autocomplete="current-title" />
                </div>

                <div class="w-full mt-3">
                        <x-label for="address" :value="__('address')"></x-label>

                        <x-input id="address" class="block mt-1 w-full"
                        type="text"
                        placeholder="{{__('address')}}"
                        name="address"
                        required
                        autocomplete="current-title" />
                </div>
                </div>

                <div class="flex md:flex-row flex-col items-center justify-between w-full md:space-x-8 mt-3">
                    <div class="w-full">
                        <x-label for="country" :value="__('country')" />

                        <x-input id="country" class="block mt-1 w-full"
                                        type="text"
                                        placeholder="{{__('country')}}"
                                        country="country"
                                        required autocomplete="current-title" />
                    </div>

                    <div class="w-full">
                        <x-label for="city" :value="__('city')" />

                        <x-input id="city" class="block mt-1 w-full"
                                        type="text"
                                        placeholder="{{__('city')}}"
                                        city="city"
                                        required autocomplete="current-title" />
                    </div>
                </div>

                <div class="w-full mt-10 mb-20 flex flex-row ">
                    <div>
                        <button class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                             submit
                        </button>
                    </div>
                </div>
                <hr>

                <div class="w-full mb-8 mt-4 flex flex-row  space-x-8">
                    <div>
                        <button class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                            freeze Account
                        </button>
                    </div>
                    <div>
                        <button class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">
                            delete account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
