<x-guest-layout>
    @section('title')
        Log in To Dashboard
    @endsection
    <x-auth-card>
        <div x-data="{ opene: true }" @click="opene = !opene" x-transition x-show="opene"
            class="text-sm w-full flex my-2 mb-4 shadow-lg rounded-lg mx-auto text-left h-full px-3 py-3 bg-indigo-500 text-white">
            To use the site features, you must first log in ✌ </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline-none text-sm text-gray-600 hover:text-gray-900 mr-4 "
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class=" text-center">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="flex flex-col space-y-5">
                <span class="flex items-center justify-center space-x-2">
                    <p class="text-sm text-gray-600">Dont't have an account? <a href="{{ route('register') }}"
                            style="color: #6366f1;">Sign Up</a></p>
                </span>
                {{-- <span class="flex items-center justify-center space-x-2">
                    <span class="h-px bg-gray-400 w-14"></span>
                    <span class="font-normal text-gray-500 capitalize">or Log in with</span>
                    <span class="h-px bg-gray-400 w-14"></span>
                </span> --}}
                <!--<div class="flex flex-col space-y-4">-->
                <!--    <a href="#"-->
                <!--        class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-indigo-500 rounded-md group hover:bg-indigo-500 focus:outline-none">-->
                <!--        <span>-->
                <!--            <svg class="text-indigo-500 group-hover:text-white" width="20" height="20"-->
                <!--                fill="currentColor">-->
                <!--                <path-->
                <!--                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">-->
                <!--                </path>-->
                <!--            </svg>-->
                <!--        </span>-->
                <!--        <span class="text-sm font-medium text-indigo-500 group-hover:text-white">Twitter</span>-->
                <!--    </a>-->
                <!--</div>-->
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
