@section('title')
list Wall
@endsection

<x-slot name="header">
    {{ __('list Wall') }}
</x-slot>
@push('scripts')
<script>
    window.addEventListener('swal:confirm' , event => {
            swal({
              title: event.detail.title,
              text: event.detail.text,
              icon: event.detail.type,
              buttons: true,
              dangerMode: true,
          })
          .then(willDelete => {
              if(willDelete){
                  window.livewire.emit('delete', event.detail.id);
              }
          });
        });

        window.addEventListener('error_not_file' , () => {
            Swal.fire({
                icon: 'warning',
                title: 'Directory of wall Not found',
                showConfirmButton: true,
                timer: 2500
            });
        });

        window.addEventListener('frezzed' , () => {
            Swal.fire({
                icon: 'success',
                title: 'The wall freeze',
                showConfirmButton: true,
                timer: 2500
            });
        });
        window.addEventListener('unfrezzed' , () => {
            Swal.fire({
                icon: 'success',
                title: 'Your wall has been activated',
                showConfirmButton: true,
                timer: 2500
            });
        });

        window.addEventListener('success_delete' , () => {
            Swal.fire({
                icon: 'success',
                title: 'Wall was deleted',
                showConfirmButton: true,
                timer: 2500
            });
        });
</script>
{{-- </script> --}}
@endpush
<div class="w-full select-none">
    <div class="w-full" wire:loading.class="opacity-50">
        <div class="container md:px-4 px-2 py-6 flex flex-col justify-start items-start w-full">

            <div class="w-full">
                <table class="w-full rounded-md">

                    <thead class="w-full">
                        <tr>
                            <th
                                class="px-3 py-3 cursor-pointer text-center text-md font-normal capitalize text-gray-600 bg-gray-50 transition duration-200 hover:bg-gray-100">
                                Video</th>
                            <th
                                class="px-3 py-3 cursor-pointer text-center text-md font-normal capitalize text-gray-600 bg-gray-50 transition duration-200 hover:bg-gray-100">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="w-full flex justify-center items-center flex-col space-y-4">
                        @foreach ($videos as $i)
                        
                        <tr class="border-b border-gray-100 w-full relative">
                            <td class="text-center py-3 border-r border-gray-100 w-full relative">
                                @if($i->status == 1)
                                <div class="absolute inset-0 bg-gray-300 bg-opacity-50 z-50 flex justify-center items-center">
                                    <p class="text-center text-white font-bold lg:text-md text-sm flex justify-center items-center">
                                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                       <span class="ml-2 text-gray-700 lg:text-lg text-md">You have freeze this wall</span>
                                    </p>
                                </div>
                                @endif
                                
                                <a href="{{ route('show.wall.feed',$i->uid) }}"
                                    class="@if($i->status == 1) filter blur-sm @endif px-2 py-6 flex flex-col justify-center items-center w-full">
                                    <div
                                        class="bg-transparent p-2 w-full sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                        <div
                                            class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                            @if(str_contains($i->path,'.mp4'))
                                            <img src="{{ env('AWS_BUCKET_URL').'video/'. $i->uid.'/'.$i->thumbnail_image }}" alt="{{ $i->title }}"
                                                class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                            @else
                                            <img src="{{ env('AWS_BUCKET_URL'). $i->path }}" alt="{{ $i->title }}"
                                                class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                            @endif
                                            <!-- <div class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                            <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div> -->
                                        </div>
                                        <div class="flex sm:flex-1 flex-col gap-2 p-1 w-full">
                                            <h1 class="md:text-lg text-md text-left font-extera text-gray-900">
                                                {{ $i->title }}
                                            </h1>
                                            <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                            </p> -->
                                            <button
                                                class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-bg-gray-800 focus:outline-none focus-visible:border-gray-500'>
                                                <span>
                                                    @if ($i->visibility == 'unslited')
                                                        unlisted
                                                    @else
                                                    {{ $i->visibility }}
                                                    @endif
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                            </td>
                            <td class="text-center py-3 w-full">

                                <div class="flex flex-col mx-3 w-full">
                                    <div
                                        class="flex w-full flex-col items-center justify-end md:space-x-4 space-y-4 space-x-3">
                                        @if ($i->status === 0)
                                        <a href="{{ route('dash.edit.video', ['video' => $i->uid]) }}"
                                            class="flex justify-center w-full ml-3 mt-4 items-center md:px-4 px-3 py-3 rounded-lg shadow-sm bg-yellow-300 transition duration-200 hover:bg-yellow-400 cursor-pointer">
                                            <svg class="md:w-6 w-5 h-5 md:h-6 text-yellow-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            <div class="md:flex hidden text-gray-700 capitalize">
                                                &nbsp; Edit
                                            </div>
                                        </a>
                                        <div wire:click.prevent="confirmDelete('{{$i->uid}}')"
                                            class="flex justify-center w-full items-center md:px-4 px-3 py-3 rounded-lg shadow-sm bg-red-300 transition duration-200 hover:bg-red-400 cursor-pointer">
                                            <svg class="md:w-6 w-5 h-5 md:h-6 text-red-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                            <div class="md:flex hidden text-gray-700 capitalize">
                                                &nbsp; Delete
                                            </div>
                                        </div>
                                        @endif
                                        <button wire:click.prevent="Freeze('{{$i->uid}}')"
                                            class="flex justify-center w-full items-center md:px-4 px-3 py-3 rounded-lg shadow-sm bg-indigo-300 transition duration-200 hover:bg-indigo-400 cursor-pointer">

                                            <svg class="md:w-6 w-5 h-5 md:h-6 text-indigo-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                                </path>
                                            </svg>
                                            <div class="md:flex hidden text-gray-700 capitalize">
                                                &nbsp; freeze
                                            </div>
                                        </button>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $videos->links() }}
            </div>

        </div>
    </div>
</div>
