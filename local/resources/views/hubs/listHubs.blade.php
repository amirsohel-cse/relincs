<x-app-layout>
    <div class="w-full">
        @section('title')
        List My Hubs
        @endsection

        <x-slot name="header">
            {{ __('List My Hubs') }}
        </x-slot>
        <div class="py-4">
            <div class="w-full mx-auto sm:px-2 lg:px-0">
                <div class="bg-white h-full sm:rounded-lg">
                    <div class="p-1 bg-white border-gray-200">
                        @if (count($my_hubs) !== 0)
                        <div
                            class="inline-block min-w-full h-full  bg-white px-4 pt-1 rounded-bl-lg rounded-br-lg">
                            <table class="min-w-max w-full table-auto h-full" id="table_id">
                                <thead>
                                    <tr class="capitalize">
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-left text-left leading-2 text-indigo-500">
                                            #</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            profile</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            hub Name</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            created At</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($my_hubs as $key=>$i)
                                    <tr>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">{{$key + 1}}</div>
                                                </div>
                                            </div>
                                        </td>
                                      
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-indigo-900 sans-normal">
                                                <img src="{{ env('AWS_BUCKET_URL') .'public/profile_hubs/'. $i->profile }}"
                                                    alt="{{ $i->name }}"
                                                    class="w-16 h-16 object-cover rounded-full shadow-sm" />
                                            </div>
                                        </td>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-indigo-900 sans-normal">{{ $i->name}}</div>
                                        </td>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-indigo-900 sans-normal">
                                                {{$i->created_at->diffForHumans() }}</div>
                                        </td>
                                        <td
                                            class="px-2 p-8 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 flex flex-row items-center space-x-4">
                                            <a target="_blank" title="view hub" href="{{ route('show.hubs',$i->uid) }}"
                                                class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-indigo-200 bg-indigo-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg></a>
                                            <a target="_blank" title="view hub"
                                                href="{{ route('dash.edit.hubs',$i->uid) }}"
                                                class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-yellow-200 bg-yellow-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                <svg class="lg:w-6 w-5 h-5 lg:h-6 text-yellow-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>

                                            </a>
                                            <form action="{{route('dash.destroy.hubs', $i->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button title="delete"
                                                    class="px-3 text-sm focus:outline-none border-none hover:bg-red-200 bg-red-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <div class="relative" x-data="{
                                                Dropdown : false,
                                            }">
                                                <button title="Tools this hubs" @click.prevnt="Dropdown = !Dropdown"
                                                    class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-indigo-200 bg-indigo-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                    <svg class="lg:w-6 w-5 h-5 lg:h-6 text-indigo-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div x-show="Dropdown"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="opacity-0 transform scale-50"
                                                x-transition:enter-end="opacity-100 transform scale-100"
                                                x-transition:leave="transition ease-in duration-100"
                                                x-transition:leave-start="opacity-100 transform scale-100"
                                                x-transition:leave-end="opacity-0 transform scale-60"
                                                class="absolute right-0 mt-2 bg-gray-150 rounded-md p-1 shadow-lg w-48 z-50 flex flex-col space-y-2">
                                                    <a href="{{ route('dash.create.media.hubs', ['hubs_id' => $i->id]) }}" class="flex justify-between items-center px-4 py-2 text-left text-sm text-white bg-indigo-400 hover:bg-indigo-600 hover:text-gray-100 transition duration-100 rounded-md">
                                                        Create Media
                                                        <svg class="w-5 h-5 text-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                    </a>
                                                     <a href="{{ route('dash.create.wall.hubs', ['hubs_id' => $i->id]) }}" class="flex justify-between items-center px-4 py-2 text-left text-sm text-white bg-yellow-400 hover:bg-yellow-600 hover:text-gray-100 transition duration-100 rounded-md">
                                                        Create Wall
                                                        <svg class="w-5 h-5 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                    </a>
                                                     <a href="{{ route('dash.create.bulletin.hubs' , ['hubs_id' => $i->id]) }}" class="flex justify-between items-center px-4 py-2 text-left text-sm text-white  bg-green-400 hover:bg-green-500 hover:text-gray-100 transition duration-100">
                                                        Create bulletin
                                                        <svg class="w-5 h-5 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="my-2 mt-4">
                                {{$my_hubs->Links()}}
                            </div>
                            @else
                            <div class="mx-auto w-full">
                                <a href="{{ route('dash.create.hubs') }}"
                                    class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100">Create
                                    a New Hub</a>
                                <h3 class="lg:text-lg text-md text-center">Hubs Not Found :(</h3>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
