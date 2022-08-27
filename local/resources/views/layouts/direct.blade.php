<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('metas')
    <title>Direct cashe.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @livewireStyles
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

                    {{$slot}}
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
    
    </html>
    