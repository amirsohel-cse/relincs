<?php $__env->startSection('title'); ?>
    Relincs
<?php $__env->stopSection(); ?>
<div>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 order-lg-2 order-md-1 order-sm-1">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col-3">
                                        <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <div id="dash_spark_1" class="mb-3"></div>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <h3 class="text-dark my-0 font-22 fw-bold"><?php echo e($totalUser); ?></h3>
                                        <p class="text-muted mb-0 fw-semibold">Total Users</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col-3">
                                        <i class="ti ti-layout font-36 align-self-center text-dark"></i>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <div id="dash_spark_2" class="mb-3"></div>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <h3 class="text-dark my-0 font-22 fw-bold"><?php echo e($totalHubs); ?></h3>
                                        <p class="text-muted mb-0 fw-semibold">Total Hubs</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col-3">
                                        <i class="ti ti-photo font-36 align-self-center text-dark"></i>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <div id="dash_spark_3" class="mb-3"></div>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <h3 class="text-dark my-0 font-22 fw-bold"><?php echo e($totalWalls); ?></h3>
                                        <p class="text-muted mb-0 fw-semibold">Total Walls</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col-3">
                                        <i class="ti ti-device-tv font-36 align-self-center text-dark"></i>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <div id="dash_spark_4" class="mb-3"></div>
                                    </div>
                                    
                                    <div class="col-12 ms-auto align-self-center">
                                        <h3 class="text-dark my-0 font-22 fw-bold"><?php echo e($totalMedia); ?></h3>
                                        <p class="text-muted mb-0 fw-semibold">Total Media</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/dashboard-component.blade.php ENDPATH**/ ?>