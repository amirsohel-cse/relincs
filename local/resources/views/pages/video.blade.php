<x-guest-layout>
    @section('title')
        Video show
    @endsection
    @section('link')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css" />
    <script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
    @endsection

        <!-- Video -->
        <div class="capitalize mx-4 py-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="flex justify-start flex-col w-full lg:col-span-8 col-span-12">
                    <div class="w-full">
                        <div class="container w-full">
                            <video controls {!! $html_data !!}
                                poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
                                <!-- Video files -->
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    type="video/mp4" size="576">
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                                    type="video/mp4" size="720">
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                                    type="video/mp4" size="1080">
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4"
                                    type="video/mp4" size="1440">
                                <!-- Caption files -->
                                <track kind="captions" label="English" srclang="en"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                                <track kind="captions" label="Français" srclang="fr"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                                <!-- Fallback for browsers that don't support the <video> element -->
                                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    download>Download</a>
                            </video>
                        </div>
                    </div>
                    <!-- Details  -->
                    <div class="w-full my-4">
                        <div class="flex md:flex-row flex-col justify-between md:space-y-1 space-y-3 border-b border-gray-300 pb-2">
                            <div class="flex flex-col jsutify-between">
                                <div class="flex flex-col w-full">
                                    <h3 class="md:text-md text-sm text-gray-900">Amir Tataloo - Heyf Didid Raft - New Music Video
                                        (Coming Soon)</h3>
                                </div>
                                <div class="mt-3 text-gray-500 md:text-sm text-xs">
                                    147,222 views &nbsp; &bullet; &nbsp; Jul 6, 2021
                                </div>
                            </div>
    
                            <div class="flex flex-row space-x-2 items-center">
    
                                
                                <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize mr-5">
                                    <button type="button" class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current md:w-7 md:h-7 w-5 h-5"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M20,8h-5.612l1.123-3.367c0.202-0.608,0.1-1.282-0.275-1.802S14.253,2,13.612,2H12c-0.297,0-0.578,0.132-0.769,0.36 L6.531,8H4c-1.103,0-2,0.897-2,2v9c0,1.103,0.897,2,2,2h3h10.307c0.829,0,1.581-0.521,1.873-1.298l2.757-7.351 C21.979,12.239,22,12.12,22,12v-2C22,8.897,21.103,8,20,8z M4,10h2v9H4V10z M20,11.819L17.307,19H8V9.362L12.468,4l1.146,0 l-1.562,4.683c-0.103,0.305-0.051,0.64,0.137,0.901C12.377,9.846,12.679,10,13,10h7V11.819z">
                                            </path>
                                        </svg>
                                        <span class="ml-1">23k</span>
                                    </button>
                                    <div class="flex items-center justify-center mx-1 text-gray-600">|</div>
                                    <button type="button" class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current md:w-7 md:h-7 w-5 h-5"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M20,3h-3H6.693C5.864,3,5.112,3.521,4.82,4.298l-2.757,7.351C2.021,11.761,2,11.88,2,12v2c0,1.103,0.897,2,2,2h5.612 L8.49,19.367c-0.203,0.608-0.101,1.282,0.274,1.802C9.14,21.689,9.746,22,10.388,22H12c0.297,0,0.578-0.132,0.769-0.36l4.7-5.64 H20c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M11.531,20h-1.145l1.562-4.684c0.103-0.305,0.051-0.64-0.137-0.901 C11.623,14.154,11.321,14,11,14H4v-1.819L6.693,5H16v9.638L11.531,20z M18,14V5h2l0.001,9H18z">
                                            </path>
                                        </svg>
                                        <span class="ml-1">1k</span>
                                    </button>
                                </div>
    
                                <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize">
                                    <button type="button" class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                            </path>
                                        </svg>
                                        <span class="ml-1 capitalize">share</span>
                                    </button>
                                    <div class="flex items-center justify-center mx-1 text-gray-600">|</div>
                                </div>
                                <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize">
                                    <button type="button" class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                        <span class="ml-1 capitalize">report</span>
                                    </button>
                                </div>
    
                            </div>
                        </div>
                        <br>
    
                        <div class="">
                            <div class="flex flex-row justify-between items-center">
                                <div class="flex justify-center items-center">
                                    <div class="w-full h-14">
                                        <img src="./img/post1.jpg" alt="picture user" class="shadow-md rounded-full md:w-14 md:h-14 w-12 h-12">
                                    </div>
                                    <div class="flex mx-3 flex-col items-center">
                                        <p class="text-gray-800 font-medium capitalize w-40 md:text-md text-sm mb-1">amir tataloo</p>
                                        <p class="text-gray-800 font-medium capitalize w-40 md:text-sm text-xs">281k follow</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <button  class="flex-no-shrink bg-green-400 hover:bg-green-500 px-6 ml-4 py-3 shadow-sm text-xs hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 capitalize focus:outline-none">follow</button>
                                </div>
                            </div>
    
                            <div class="m-3 mt-6">
                                <p class="flex w-full h-full relative text-gray-800 font-base md:text-md text-sm">
                                    Description og this great Video 😍
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Details  -->
                </div>
                <div class="flex justify-start w-full lg:col-span-4 col-span-12">
                    <div class="flex flex-col space-x-2">
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="./img/post1.jpg" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </div>
        <!-- End Video -->
</x-guest-layout>