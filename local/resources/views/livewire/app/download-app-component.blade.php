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
            width: 40%;
            height: 70vh;
        }

        .column2 {
            width: 40%;
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
            background: #E5E7EB;
            padding: 10px 20px;
            border-radius: 10px;
        }
        .btn:hover{
            background: #d3d3d4;
            padding: 10px 20px;
            border-radius: 10px;
            transition-duration: .3s;
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
    </style>

    <div class="container">
        <div class="left"></div>
        <div class="column2" style="text-align: center;">
            <h1 style="font-size: 42px;"><b>Download Cashei Mobile App</b></h1>
            <br><br>
            <a href="{{ asset('local/public/app/cashei.apk') }}" class="btn" download>Download Now</a>
        </div>
        <div class="column1">
            <div class="image_container">
                <img class="login_image" src="https://cashei.app/img/login_bg.png" />
            </div>
        </div>
    </div>
</x-guest-layout>
