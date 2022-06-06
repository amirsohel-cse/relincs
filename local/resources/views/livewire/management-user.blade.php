<div class="w-full">
    @section('title')
    managament User
    @endsection

    <x-slot name="header">
        {{ __('managament User') }}
    </x-slot>
    @push('scripts')
    <script>
        window.addEventListener('deleteUser', user => {
            Swal.fire({
            icon : 'info',
            title: 'Delete User Successfully',
            showConfirmButton: false,
            background: '#FEF2F2',
            timer: 1500
        })
        });

    </script>

    @endpush
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                        Profile
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                        Username
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                        Created at
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $i)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full" src="{{$i->profile()}}"
                                    alt="{{$i->username}}" />
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$i->username}}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$i->created_at->diffForHumans()}}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm  flex flex-row items-center space-x-4">

                        <a target="_blank" title="view hub" href="{{ route('gu.profile.show',$i->id) }}"
                            class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-indigo-200 bg-indigo-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </a>
                        <div>
                            <button wire:click.prevent="delete({{$i->id}})" title="delete"
                                class="px-3 text-sm focus:outline-none border-none hover:bg-red-200 bg-red-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-4 mx-auto">
            {{$users->links()}}
        </div>
    </div>
</div>
