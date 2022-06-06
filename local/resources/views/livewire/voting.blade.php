<div>
    <div class="flex justify-between items-start">
        <div class="flex space-x-2 items-center">
            <button type="button" class="focus:outline-none Like"
                wire:loading.class="opacity-50 transform transition ease duration-200 scale-50"
                wire:click.prevent="like" @click="like = !like"><svg
                    class="w-8 h-8 text-gray-800  @if ($likeActive) text-red-600 fill-current transition duration-200  @endif"
                    x-transition.scale.80 {{--
                    x-bind:class="like ? 'fill-current text-red-600 transition duration-200' : '' " --}} fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg></button>


            <button type="button" class="focus:outline-none Comment" @click="comment = !comment"><svg
                    class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg></button>

            <button type="button" class="focus:outline-none " @click.prevent="tools = !tools"><svg
                    class="w-7 h-7 mb-1 ml-1 text-gray-700  z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg></button>


                    <button type="button" id="shareButton"
                    class="flex items-center text-sm text-gray-700 focus:outline-none">
                    <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                        </path>
                    </svg>
                </button>
        </div>

        <div class="flex space-x-2 items-center" wire:loading.class="opacity-50" wire:target="mark()">
            <button type="button" class="focus:outline-none" wire:click="mark">
                <svg class="w-8 h-8 text-gray-700  @if ($marked) text-gray-900 fill-current transition duration-200  @endif"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                </svg>
            </button>
        </div>
     

    </div>
    <div class="w-full px-2 mt-1">
        <p class="font-bold text-sm text-gray-700">{{ $likes }} likes</p>
    </div>
    <div class="hidden" id="modal_share" wire:ignore>
        <x-share-button :title='$video->title' />
    </div>
    <script src="{{ asset('js/share.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('unmarked', () => {
            Swal.fire({
                icon: 'info',
                position: 'top-end',
                title: 'Unmarked wall',
                showConfirmButton: false,
                timer: 1300
            });
        });

        window.addEventListener('marked', () => {
            Swal.fire({
                icon: 'success',
                position: 'top-end',
                title: 'marked wall',
                showConfirmButton: false,
                timer: 1300
            });
        });

    </script>
</div>
