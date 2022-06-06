<x-app-layout>
    @section('title')
        Create Wall
    @endsection

    <x-slot name="header">

        <div class="flex justify-between items-center w-full">
            <div> {{ __('Create Wall') }}</div>
            <div class="flex justify-center items-center space-x-3">
                <a href="{{ route('dash.list.video') }}"
                    class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100 hover:bg-indigo-500 hover:text-white">list Wall</a>
            </div>
        </div>
    </x-slot>


@livewire('video.create')
    @push('scripts')
        <script>
            window.addEventListener('video_uploaded', () => {
                Swal.fire({
                icon : 'success',
                title: 'Successfully',
                showConfirmButton: false,
                background: '#D1F1E5',
                timer: 1500
            })
            });

        </script>

    @endpush
</x-app-layout>
