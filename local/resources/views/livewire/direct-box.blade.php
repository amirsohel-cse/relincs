<div class="w-full flex">
    <div class="lg:w-2/6 w-full py-2 lg:flex hidden items-start flex-col border-r">
        <div class="flex px-4 py-1 justify-between items-end w-full">
            <button class="p-2 bg-gray-100 rounded-full"><svg class="w-6 h-6 text-slate-700" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg></button>
            <button class="p-2 bg-gray-100 rounded-full"><svg class="w-6 h-6 text-slate-700" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg></button>
        </div>
        <div class="relative lg:px-4 px-1 flex justify-between items-center w-full my-2">
            <input type="search" placeholder="Search"
                class="bg-gray-200 outline-none focus:border-gray-300 focus:bg-gray-100 border border-gray-200 rounded-lg shadow pl-10 pr-4 py-2 w-full">
            <button type="buttin" disable class="absolute left-0 top-0 ml-7 mt-3 flex justify-center">
                <svg class="text-gray-500 h-4 w-4 fill-current flex" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>
        <div class="my-3 lg:text-lg px-4 text-md text-gray-700 font-medium text-left">Chats</div>
        <div class="mt-3 chats flex pl-4 overflow-y-scroll w-full flex-col items-center space-y-1">
            @forelse ($users as $user)
                <button wire:click="goto({{ $user->id }})"
                    class="w-full flex justify-start items-center space-x-4 py-1">
                    <div class="rounded-full shadow w-14 h-14">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg" alt="bitcoin"
                            class="object-cover rounded-full w-full h-full">
                    </div>
                    <div class="flex justify-between flex-col items-start">
                        <div class="text-gray-700 font-normal">{{ $user->username }}</div>
                        <small class="text-gray-500 text-xs">3 hours ago</small>
                    </div>
                </button>
            @empty
                <p class="ext-center font-medium">not found users</p>
            @endforelse
        </div>
    </div>
    @if ($show)
        @livewire('message-user', ['user' => $select_user_go_to_message])
    @endif
</div>
