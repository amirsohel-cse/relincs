<x-guest-layout>
    @section('title')
        Download Cashei Mobile App
    @endsection
    <style>
        .container {
            width: 70%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            height: 70vh;
            padding-top: 70px;
            padding-bottom: 70px;
            background: transparent;
        }

        .left {
            width: 10%;
        }

        .column1 {
            width: 45%;
            height: 70vh;
        }

        .column2 {
            width: 55%;
            height: 70vh;
        }

        .image_container {
            width: 100%;
            height: 60vh;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            margin-top: -75px;
        }

        .login_image {
            height: 100%;
            width: 75%;
        }

        @media screen and (max-width: 1440px) and (min-width: 1279px) {
            .container {
                width: 80%;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                height: 70vh;
                padding-top: 70px;
                padding-bottom: 70px;
                background: transparent;
            }

            .left {
                width: 5%;
            }

            .column1 {
                width: 47%;
                height: 70vh;
            }

            .column2 {
                width: 47%;
                height: 70vh;
            }
        }

        .btn{
            padding: 10px 20px;
        }

        @media screen and (max-width: 1279px) and (min-width: 1024px) {
            .container {
                width: 100%;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                height: 70vh;
                padding-top: 70px;
                padding-bottom: 70px;
                background: transparent;
            }

            .left {
                display: none;
            }

            .column1 {
                width: 47%;
                height: 70vh;
            }

            .column2 {
                width: 47%;
                height: 70vh;
            }
        }

        @media screen and (max-width: 1023px) {
            .left {
                display: none;
            }

            .column1 {
                display: none;
            }

            .column2 {
                width: 100%;
            }
        }
        .align-center{
            margin: 0 auto;
        }
    </style>

    <div class="container">
        <div class="left"></div>
        <div class="column2" style="text-align: center;">
            <div style="width: 100%; display: flex; margin-top: 20%;">
                <div style="width: 50%; text-align: center; margin-right: 10px;">
                    {{-- <img src="{{ asset('local/public/android-logo.png') }}" class="align-center" alt="">
                    <br> --}}
                    {{-- <h1 style="font-size: 20px">android</h1> --}}
                    <a href="{{ asset('local/public/app/cashei.apk') }}" class="btn" download><img src="{{ asset('assets/images/android-download.png') }}" style="height: 100px;" alt=""></a>
                </div>
                <div style="width: 50%; text-align: center;">
                    {{-- <img src="{{ asset('local/public/apple.png') }}" class="align-center" alt="">
                    <br> --}}
                    {{-- <h1 style="font-size: 20px">ios</h1> --}}
                    <a href="#" class="btn"><img src="{{ asset('assets/images/ios-download.png') }}" style="height: 100px;" alt=""></a>
                </div>
            </div>

            {{-- <div class="column1">

            </div> --}}
        </div>
        <div class="column1">
            <div class="image_container">
                <img class="login_image" src="https://cashei.app/img/login_bg.png" />
            </div>
        </div>
    </div>
</x-guest-layout>
