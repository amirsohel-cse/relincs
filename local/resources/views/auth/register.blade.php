<x-guest-layout>
    @section('title')
    Sign Up
    @endsection

    @section('link')
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script class="jsbin" src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>
    .g-recaptcha-outer{
            text-align: center;
            border-radius: 2px;
            background: #f9f9f9;
            border-style: solid;
            border-color: #d8d8d8;
            border-width: 1px;
            border-bottom-width: 2px;
        }
        .g-recaptcha-inner{
            width: 154px;
            height: 82px;
            overflow: hidden;
            margin: 0 auto;
        }
        .g-recaptcha{
            position:relative;
            left: -2px;
            top: -1px;
        }
        </style>
    
    @endsection
    <!-- Sign up -->
    <div
        class="capitalize flex items-center max-h-3xl md:my-6 md:px-4 px-8 my-3 md:max-w-2xl max-w-full mx-auto md:p-4 justify-center md:shadow-none bg-gray-50 shadow-lg rounded-md ">
        <div class="md:flex-1 rounded-lg">
            <h3 class="mb-4 md:text-2xl text-xl font-base text-gray-800">Account Sign up</h3>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{ route('register') }}" enctype="multipart/form-data" method="post"
                class="flex flex-col space-y-5" autocomplete="off">
                @csrf
                <div class="grid grid-cols-2 gap-x-4">

                    <div>
                        <x-label for="fname" :value="__('First name')" />
                        <x-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
                            required autofocus />
                    </div>
                    <div>
                        <x-label for="lname" :value="__('Last name')" />
                        <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                            required autofocus />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <x-label for="email" :value="__('email')"></x-label>
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>
                    <div>
                        <x-label for="email-confirm" :value="__('confirm Email')"></x-label>
                        <x-input id="email-confirm" class="block mt-1 w-full" type="email" name="email_confirmation"
                            :value="old('email_confirmation')" required autofocus />
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <x-label for="dob" :value="__('date of birth')"></x-label>
                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required
                            autofocus />
                    </div>
                    <div>
                        <x-label for="gender" :value="__('gender')"></x-label>
                        <select name="gender" id="gender" autofocus required
                            class="px-4 py-2 mt-1 w-full bg-transparent transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <x-label for="country" :value="__('country')"></x-label>
                        <x-input id="country" class="block mt-1 w-full" type="text" name="country"
                            :value="old('country')" autofocus />
                    </div>
                    <div>
                        <x-label for="city" :value="__('city')"></x-label>
                        <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"
                            autofocus />
                    </div>
                </div>

                <div class="col-span-2 my-2 mb-8">
                    <x-label for="profile" :value="__('your picture')"></x-label>
                    <div class="flex items-center justify-center w-full mt-4 drop-zone">
                        <div class="w-full">
                            <div class="flex justify-center items-center mx-auto">
                                <img id="blah" src="https://relincs.com/img/choose_avatar.jpg" alt="your image"
                                    class="flex justify-center object-cover items-center mx-auto rounded-full h-32 w-32" />
                            </div>
                            <input class="drop-zone__input" type="file" class="hidden" name="image_profile">
                            <p class="pointer-none text-gray-500 text-sm"><span class="text-sm"></span>
                                files here <br /> or <a href="javascript:void(0)" id=""
                                    class="text-indigo-600 hover:underline">select a file</a> from your computer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <x-label for="password" :value="__('password')"></x-label>
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-indigo-600 hover:underline focus:text-indigo-800">Forgot
                            Password?</a>
                    </div>
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                        :value="old('password')" required autofocus />

                </div>
                <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <x-label for="password" :value="__('confirm password')"></x-label>
                    </div>
                    <x-input id="confirm_password" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autofocus />

                </div>
                {{-- {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!} --}}
                <div class="g-recaptcha-outer">
                    <div class="g-recaptcha-inner">
                        <div class="g-recaptcha" data-size="compact" data-sitekey="6Lfx_DYgAAAAAHkeOI9FhFsigfkK8hokSRbSgwCV"></div>
                    </div>
                    <span class="text-danger" id="js-msg" style="display: none;"><b>Failed to pass reCaptcha try again.</b></span>
                    @error('g-recaptcha-response')
                        <span class="text-danger"><b>{{ $message }}</b></span>
                    @enderror
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember" name="accepted"
                        class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-indigo-200" />
                    <label for="remember" class="text-sm font-medium text-gray-500">I accept the terms and conditions of using relincs site</label>
                </div>
                <div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-lg font-medium text-white transition-colors duration-300 bg-indigo-500 rounded-md shadow hover:bg-indigo-600 focus:outline-none focus:ring-indigo-200 focus:ring-4">
                        Sign Up
                    </button>
                </div>
                <!--<div class="flex flex-col space-y-5">-->
                <!--    <span class="flex items-center justify-center space-x-2">-->
                <!--        <span class="h-px bg-gray-400 w-14"></span>-->
                <!--        <span class="font-normal text-gray-500 capitalize">or sign up with</span>-->
                <!--        <span class="h-px bg-gray-400 w-14"></span>-->
                <!--    </span>-->
                <!--    <div class="flex flex-col space-y-4">-->
                <!--        <a href="#"-->
                <!--            class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-indigo-500 rounded-md group hover:bg-indigo-500 focus:outline-none">-->
                <!--            <span>-->
                <!--                <svg class="text-indigo-500 group-hover:text-white" width="20" height="20"-->
                <!--                    fill="currentColor">-->
                <!--                    <path-->
                <!--                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">-->
                <!--                    </path>-->
                <!--                </svg>-->
                <!--            </span>-->
                <!--            <span class="text-sm font-medium text-indigo-500 group-hover:text-white">Twitter</span>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
            </form>
        </div>
    </div>
    </div>

    <!-- End Sign up -->
</x-guest-layout>
