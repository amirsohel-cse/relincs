<div class="w-full">
    <div class="w-full">
        <div class="bg-gray-100 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-80">
                <p class="text-3xl font-bold leading-7 text-center">Contact us</p>
                <form wire:submit.prevent="submitContactMessage">
                    @if (session()->has('success_message'))
                        <div class="flex flex-col sm:justify-center items-center">
                            <div class="p-3 mt-5 text-center" style="background: rgb(119, 194, 119); width: 65%; border-radius: 3px;">{{ session()->get('success_message') }}</div>
                        </div>
                    @endif
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-1/2 flex flex-col">
                            <label class="font-semibold leading-none">Name</label>
                            <input type="text" wire:model="name" id="name"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                            <label class="font-semibold leading-none">Email</label>
                            <input type="email" wire:model="email" id="email"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none">Message</label>
                            <textarea type="text" wire:model="message" id="content"
                                class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                            @error('message')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit" class="mt-9 rounded-md font-semibold leading-none text-gray-800 py-4 px-10 bg-indigo-100 hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none">
                            <div wire:loading wire:target='submitContactMessage' wire:key='submitContactMessage'>Sending...</div>
                            <div wire:loading.remove wire:target='submitContactMessage' wire:key='submitContactMessage'>Send Message</div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>