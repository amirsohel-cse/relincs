<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/admin/images/favicon.ico')); ?>">

    <!-- App css -->
    <link href="<?php echo e(asset('assets/admin/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/admin/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/admin/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.12.0/tagify.min.css" />

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');
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
    @media  screen and (max-width: 720px) {
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

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.layouts.inc.sidebar')->html();
} elseif ($_instance->childHasBeenRendered('KuQQuac')) {
    $componentId = $_instance->getRenderedChildComponentId('KuQQuac');
    $componentTag = $_instance->getRenderedChildComponentTagName('KuQQuac');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KuQQuac');
} else {
    $response = \Livewire\Livewire::mount('admin.layouts.inc.sidebar');
    $html = $response->html();
    $_instance->logRenderedChild('KuQQuac', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.layouts.inc.navbar')->html();
} elseif ($_instance->childHasBeenRendered('UkLeI7D')) {
    $componentId = $_instance->getRenderedChildComponentId('UkLeI7D');
    $componentTag = $_instance->getRenderedChildComponentTagName('UkLeI7D');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UkLeI7D');
} else {
    $response = \Livewire\Livewire::mount('admin.layouts.inc.navbar');
    $html = $response->html();
    $_instance->logRenderedChild('UkLeI7D', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <div class="page-wrapper">
        <div class="page-content-tab">
            
            <?php echo e($slot); ?>

            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.layouts.inc.footer')->html();
} elseif ($_instance->childHasBeenRendered('iLvsL6X')) {
    $componentId = $_instance->getRenderedChildComponentId('iLvsL6X');
    $componentTag = $_instance->getRenderedChildComponentTagName('iLvsL6X');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iLvsL6X');
} else {
    $response = \Livewire\Livewire::mount('admin.layouts.inc.footer');
    $html = $response->html();
    $_instance->logRenderedChild('iLvsL6X', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

    <!-- Javascript  -->   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/chartjs/chart.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/lightpicker/litepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/apexcharts/apexcharts.min.js')); ?>"></script>       

    <!-- App js -->
    <script src="<?php echo e(asset('assets/admin/js/app.js')); ?>"></script>

    <!-- Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js" ></script>
    
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    
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

        <?php if(Session::has('success')): ?>
            toastr.options =
                {
                    "progressBar" : true,
                    "positionClass": "toast-bottom-left"
                }
                toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>
        // <?php if(Session::has('success')): ?>
        //     Swal.fire(
        //         'Success!',
        //         'New course created successfully.',
        //         'success'
        //     )
        // <?php endif; ?>


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
                $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> '+$('.btnPreLoad').html());
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/layouts/base.blade.php ENDPATH**/ ?>