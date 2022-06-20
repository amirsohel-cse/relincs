<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
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

    <!-- summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" />

    {{-- Toaster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    {{-- tagify --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.12.0/tagify.min.css" />

    @livewireStyles
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');
    body {
        font-family: 'Titillium Web', sans-serif;
    }
    .spinner-border-sm {
        width: 13px;
        height: 13px;
        border-width: 1px;
    }
    .spinner-border-xs {
        width: 10px;
        height: 10px;
        border-width: 1px;
    }
    .submitBtn{
        width: 110px;
    }
    .col-form-label{
        color: #000000;
    }
    .custom_tbl tr:nth-child(odd) {
        background-color: white;
    }
    .custom_tbl tr:nth-child(even) {
        background-color: #F2F2F2;
    }
    .custom_tbl th {
        background-color: #e7e6e6;
        color: black;
        font-weight: bold;
    }
    .card-title {
        float: left;
    }
    .card-button {
        float: right;
    }
    .sinput {
        border: 1px solid #CED4DA;
        border-radius: 4px;
        padding: 5px 7px;
        font-size: 12.5px;
    }
    .sinput:focus {
        border: 1px solid #046A70;
        box-shadow: none;
        outline: none;
    }
    .search_cont {
        text-align: right;
    }
    .sort_cont {
        text-align: left;
    }
    @media screen and (max-width: 720px) {
        .search_cont {
            text-align: center;
        }
        .sort_cont {
            text-align: center;
        }
    }
    .btn-sm {
        padding: 5px 17px;
        font-size: 13.5px;
    }
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    .img-delete-btn {
        position: absolute;
        margin-left: -20px;
        margin-top: 7px;
        background: white;
        color: red;
        font-size: 11px;
        border-radius: 100%;
        padding: 1px 5px;
    }
</style>
<body id="body" class="dark-sidebar">

    @livewire('admin.layouts.inc.sidebar')
    @livewire('admin.layouts.inc.navbar')
    <div class="page-wrapper">
        <div class="page-content-tab">
            
            {{ $slot }}
            
            @livewire('admin.layouts.inc.footer')
        </div>
    </div>

    <!-- Javascript  -->   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/admin/plugins/chartjs/chart.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/lightpicker/litepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/apexcharts/apexcharts.min.js') }}"></script>       

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

    <!-- Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js" ></script>
    
    {{-- sweet alert 2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Toaster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- tagify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.12.0/tagify.min.js" ></script>

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
        // @if(Session::has('success'))
        //     Swal.fire(
        //         'Success!',
        //         'New course created successfully.',
        //         'success'
        //     )
        // @endif


        //SWL
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete !'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            })
        });
        //Success Delete
        window.addEventListener('categoryDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Category has been deleted successfully.',
                'success'
            )
        });
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

    @stack('scripts')

    @livewireScripts
</body>
</html>