<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Direct cashe.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<style>
    ::-webkit-scrollbar {
        scroll-behavior: smooth;
        background: rgb(227, 227, 227);
        width: 0.45rem;
        border-radius: 10rem;
    }

    ::-webkit-scrollbar-thumb {
        background: rgb(124, 124, 124);
        width: .45rem;
        border-radius: 10rem;
    }

    .chats {
        height: 100vh;
    }

    @media (min-width: 1024px) {
        .chats {
            height: 34rem
                /* 320px */
            ;
        }
    }

</style>

<body class="antialiased bg-gray-200 text-gray-800 scroller h-screen">
    <div class="w-full lg:px-32 px-0 lg:py-4">
        <div class="bg-white rounded-lg shadow-lg chats overflow-y-hidden">
            <div class="flex justify-center w-full h-full">
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
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                    <div class="my-3 lg:text-lg px-4 text-md text-gray-700 font-medium text-left">Chats</div>
                    <div class="mt-3 chats flex pl-4 overflow-y-scroll w-full flex-col items-center space-y-1">
                        @forelse ($users as $user)
                            <x-direct.card-users :user='$user' />
                        @empty
                            
                        @endforelse
                    </div>
                </div>
                <div class="lg:w-4/6 w-full bg-white flex flex-col">
                    <main class="border-b border-gray-200 w-full">
                        <div class="flex justify-between w-full items-center p-2">
                            <div class="w-full flex items-center">
                                <div class="w-14 h-14 rounded-full shadow relative">
                                    <!-- profile photo user -->
                                    <img src="https://randomuser.me/api/portraits/men/97.jpg" alt="tavakoli"
                                        class="w-full h-full object-cover rounded-full shadow">
                                    <!-- status user -->
                                    <div
                                        class="absolute top-0 right-0 m-1 w-2 h-2 bg-green-500 rounded-full animate-ping">
                                    </div>
                                    <div class="absolute top-0 right-0 m-1 w-2 h-2 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="flex justify-between flex-col items-start ml-2">
                                    <div class="text-gray-700 font-normal">saman sayyar</div>
                                    <small class="text-gray-500 text-xs">10 hours ago</small>
                                </div>
                            </div>
                        </div>
                    </main>
                    <section class="w-full chats">
                        <div class="flex flex-col justify-between items-center w-full h-full">
                            <div class="bg-slate-100 w-full h-full flex flex-col">
                                <div class="p-4 w-full flex space-y-2 flex-col">
                                    <div class="w-full flex justify-start text-sm">
                                        <div class="pl-3 py-3 pr-3 leading-6 rounded-lg bg-white shadow-md">سلام داوش
                                        </div>
                                    </div>
                                    <div class="w-full flex justify-end text-sm">
                                        <div
                                            class="pl-3 w-72 py-3 pr-3 leading-6 rounded-lg bg-slate-600 text-white shadow-md">
                                            Hello,How are you doing?Hello,How are you doing?Hello,How are you
                                            doing?Hello,How are you doing?</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-200 w-full lg:h-14">
                                <div class="w-full h-full flex items-center py-2 relative">
                                    <div class="flex px-2 lg:w-5/6 w-full">
                                        <textarea name="message" id="message" rows="1"
                                            class="w-full lg:py-2 p-2 pl-6 pr-2 rounded-md shadow-md placeholder:text-slate-600 resize-none focus:bg-slate-100 bg-slate-300 outline-none"
                                            placeholder="Write Something"></textarea>
                                    </div>
                                    <div
                                        class="lg:w-1/6 lg:reltive absolute right-0 top-0 bottom-0 p-1 mr-2 flex justify-center items-center">
                                        <button
                                            class="bg-slate-700 hover:bg-slate-800 active:scale-90 transition duration-200 ease-in-out transform lg:py-2 py-1 lg:px-9 px-3 rounded-md text-white">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
