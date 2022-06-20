<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- Toaster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    @livewireStyles
</head>
<body id="body" class="auth-page" style="background-image: url('{{ asset('assets/admin/images/p-1.png') }}'); background-size: cover; background-position: center center;">
    
    {{ $slot }}

    <!-- App js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    {{-- Toaster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function(){
            toastr.options = {
                "progressBar": true,
                "positionClass": "toast-bottom-left"
            };
            $('[data-toggle="tooltip"]').tooltip();
        });
        window.addEventListener('success', event => {
            toastr.success(event.detail.message);
        });
        window.addEventListener('warning', event => {
            toastr.warning(event.detail.message);
        });
        window.addEventListener('error', event => {
            toastr.error(event.detail.message);
        });

        @if(Session::has('success'))
            toastr.options =
                {
                    "progressBar" : true,
                    "positionClass": "toast-bottom-left"
                }
                toastr.success("{{ session('success') }}");
        @endif
    </script>

    <script>
        $(document).ready(function(){
            $('.statusPreLoad').on('click', function(){
                $(this).html('<span class="spinner-border spinner-border-xs" role="status" aria-hidden="true"></span>');
            });

            $('.btnPreLoad').on('click', function(){
                $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
            });
        });
    </script>

    @livewireScripts
</body>
</html> 