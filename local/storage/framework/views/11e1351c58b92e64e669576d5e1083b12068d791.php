<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title'); ?>
        Download Cashei Mobile App
    <?php $__env->stopSection(); ?>
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

        @media  screen and (max-width: 1440px) and (min-width: 1279px) {
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

        @media  screen and (max-width: 1279px) and (min-width: 1024px) {
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

        @media  screen and (max-width: 1023px) {
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
            <div style="width: 100%; display: flex; margin-top: 25%;">
                <div style="width: 47%; text-align: center; padding: 10px;">
                    
                    <a href="<?php echo e(asset('local/public/app/cashei.apk')); ?>" class="btn" download><img src="<?php echo e(asset('assets/images/android-download.png')); ?>" alt=""></a>
                </div>
                <div style="width: 47%; text-align: center; padding: 10px;">
                    
                    <a href="#" class="btn"><img src="<?php echo e(asset('assets/images/ios-download.png')); ?>" alt=""></a>
                </div>
            </div>

            
        </div>
        <div class="column1">
            <div class="image_container">
                <img class="login_image" src="https://cashei.app/img/login_bg.png" />
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/app/download-app-component.blade.php ENDPATH**/ ?>