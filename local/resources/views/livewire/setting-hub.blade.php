<div class="w-full">
    @section('title')
        Setting Hubs
    @endsection

    <x-slot name="header">
        {{ __('Setting Hubs') }}
    </x-slot>
    <div class="w-full">
        {{-- <div class="my-d w-50">
            @if (session()->has('successMessage'))
                <div class="text-center bg-gray-400 p-4">{{ session('successMessage') }}</div>
            @endif
        </div> --}}
        @php
            $data = App\Models\SettingHub::where('user_id', Auth::user()->id)->first();

            if($data != ''){
                $name_hubs = $data->name_hubs;
                $username_admin = $data->username_admin;
                $hub_access = $data->hub_access;
                $visiblity = $data->visiblity;
                $link_profile = $data->link_profile;
                $email_contact = $data->email_contact;
            }
            else{
                $name_hubs = '';
                $username_admin = '';
                $hub_access = '';
                $visiblity = '';
                $link_profile = '';
                $email_contact = '';
            }
            
        @endphp
        <div class="my-4 w-full">
            
            <form method="POST" action={{ route('dash.hubs.settingPost') }}>
                @csrf
            <div>
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    identity
                </h4>
                
                <div class="flex items-center flex-col">
                    <div class="w-full mt-3">
                        <div class=" text-sm">
                            <span class="text-gray-700 dark:text-gray-400 capitalize">name hubs</span>
                            <x-input type="text" class="block mt-1 w-full" id="name_channel" name="name_hubs" value="{{ $name_hubs }}" autofocus autocomplete="current-title" />
                            @error('name_hubs')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <div class=" text-sm">
                            <span class="text-gray-700 dark:text-gray-400 capitalize">username admin</span>
                            <x-input type="text" class="block mt-1 w-full" id="usernameAdmin" name="username_admin" value="{{ $username_admin }}" autofocus autocomplete="current-title" />
                            @error('username_admin')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <hr>
            <div class="mt-3 w-full">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    Privacy
                </h4>


                <div action="" class="w-full flex justify-start items-center flex-col">
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                            who should have access to this hub and its content
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select name='hub_access'
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="anyone" @if($hub_access == 'anyone') selected @endif>anyone (open)</option>
                                            <option value="only_members" @if($hub_access == 'only_members') selected @endif>only members (closed)</option>
                                            <option value="only_those" @if($hub_access == 'only_those') selected @endif>only those</option>
                                            <option value="only_invited" @if($hub_access == 'only_invited') selected @endif>who i invite (private)</option>
                                        </select>
                                        @error('hub_access')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                            who should be able to see this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select name='visiblity'
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="anyone" @if($visiblity == 'anyone') selected @endif>anyone</option>
                                            <option value="invited-only" @if($visiblity == 'invited-only') selected @endif>those whom i invite</option>
                                        </select>
                                        
                                        @error('visiblity')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                            Do you want your private profile to be linked to this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select name='link_profile'
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="yes" @if($link_profile == 'yes') selected @endif>yes</option>
                                            <option value="no" @if($link_profile == 'no') selected @endif>no</option>
                                        </select>
                                        
                                        @error('link_profile')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                           who should contact you at your hub email box
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select name='email_contact'
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option value="member" @if($email_contact == 'member') selected @endif>only member</option>
                                            <option value="anyone" @if($email_contact == 'anyone') selected @endif>anyone</option>
                                        </select>

                                        @error('email_contact')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="mt-5 w-full">
                <button type="submit" class="inline-flex items-center justify-center mb-3 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-medium text-sm text-center text-white capitalize hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
            </div>
            </form>

            {{-- <div class="mt-3">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    audience
                </h4>


                <div action="" class="w-full flex justify-start items-center flex-col">
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                            when he clicks on this optin, he gets to the audience
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone (open)</option>
                                            <option>only members (closed)</option>
                                            <option>only those</option>
                                            <option>who i invite (private)</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(Session::has('successMessage'))
        Swal.fire(
            'Success!',
            'Setting updated successfully',
            'success'
        )
    @endif
</script>
