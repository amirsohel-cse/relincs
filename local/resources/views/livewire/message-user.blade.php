<div class="lg:w-4/6 w-full bg-white flex flex-col">
    <@if ($user->count() != 0)
    <main class="border-b border-gray-200 w-full">
        <div class="flex justify-between w-full items-center p-2">
            <div class="w-full flex items-center">
                <div class="w-14 h-14 rounded-full shadow relative">
                    <!-- profile photo user -->
                    <img src="https://randomuser.me/api/portraits/men/97.jpg" alt="tavakoli"
                        class="w-full h-full object-cover rounded-full shadow">
                    <!-- status user -->
                    <div class="absolute top-0 right-0 m-1 w-2 h-2 bg-green-500 rounded-full animate-ping">
                    </div>
                    <div class="absolute top-0 right-0 m-1 w-2 h-2 bg-green-500 rounded-full"></div>
                </div>
                <div class="flex justify-between flex-col items-start ml-2">
                    <div class="text-gray-700 font-normal">{{$user->username}}</div>
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
                        <div class="pl-3 w-72 py-3 pr-3 leading-6 rounded-lg bg-slate-600 text-white shadow-md">
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
    @else
        'فتگویی را اغاز کنید'
    @endif
</div>
