<?php $__env->startSection('title'); ?>
    All Users
<?php $__env->stopSection(); ?>
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Users</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12 mb-2 sort_cont">
                                <label class="font-weight-normal" style="">Show</label>
                                <select name="sortuserresults" class="sinput" id="" wire:model="sortingValue" wire:change='resetPagination'>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="font-weight-normal" style="">entries</label>
                            </div>

                            <div class="col-md-6 col-sm-12 mb-2 search_cont">
                                <label class="font-weight-normal mr-2">Search:</label>
                                <input type="search" class="sinput" placeholder="Search" wire:model="searchTerm" wire:change='resetPagination' />
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Hubs</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sl = ($users->perPage() * $users->currentPage())-($users->perPage() - 1)
                                    ?>
                                    <?php if($users->count() > 0): ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sl++); ?></td>
                                                <td><img src="https://relincsca.s3.amazonaws.com/public/profile_image/<?php echo e($user->image_profile); ?>" style="height: 30px; width: 30px;" class="img-fluid rounded-circle" alt=""> <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->coutry); ?></td>
                                                <td><?php echo e($user->city); ?>0</td>
                                                <td><?php echo e(totalHubs($user->id)); ?></td>
                                                <td style="text-align: center;">
                                                    <button type="button" class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu" style="width: auto;">
                                                        <a class="dropdown-item" href=""><i class="ti ti-eye"></i> View</a>
                                                        <a class="dropdown-item" href=""><i class="ti ti-edit"></i> Edit</a>
                                                        <a href="" wire:click.prevent="deleteConfirmation(<?php echo e($user->id); ?>)" class="dropdown-item"><i class="ti ti-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="8" style="text-align: center;">No data available!</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($users->links('pagination-links')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        <?php if(Session::has('add_course_success')): ?>
            Swal.fire(
                'Success!',
                'New course created successfully.',
                'success'
            )
        <?php endif; ?>
        <?php if(Session::has('edit_course_success')): ?>
            Swal.fire(
                'Success!',
                'Course updated successfully.',
                'success'
            )
        <?php endif; ?>
        window.addEventListener('showEditModal', event => {
            $('#editDataModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#addDataModal').modal('hide');
            $('#editDataModal').modal('hide');
        });

        //DeleteConfirmation
        window.addEventListener('show_user_delete_confirmation', event => {
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
        window.addEventListener('userDeleted', event => {
            Swal.fire(
                'Deleted!',
                'User has been deleted successfully.',
                'success'
            )
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/user/all-users-component.blade.php ENDPATH**/ ?>