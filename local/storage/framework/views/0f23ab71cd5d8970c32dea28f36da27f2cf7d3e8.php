<?php $__env->startSection('title'); ?>
    Walls
<?php $__env->stopSection(); ?>
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Walls</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Walls</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Walls</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12 mb-2 sort_cont">
                                <label class="font-weight-normal" style="">Show</label>
                                <select name="sortuserresults" class="sinput" id="" wire:model="sortingValue"
                                    wire:change='resetPagination'>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="font-weight-normal" style="">entries</label>
                            </div>

                            <div class="col-md-6 col-sm-12 mb-2 search_cont">
                                <label class="font-weight-normal mr-2">Search:</label>
                                <input type="search" class="sinput" placeholder="Search" wire:model="searchTerm"
                                    wire:keyup='resetPagination' />
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Views</th>
                                        <th>Visibility</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sl = $walls->perPage() * $walls->currentPage() - ($walls->perPage() - 1);
                                    ?>
                                    <?php if($walls->count() > 0): ?>
                                        <?php $__currentLoopData = $walls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sl++); ?></td>
                                                <td><img src="<?php echo e(env('AWS_BUCKET_URL').$wall->path); ?>"
                                                        style="height: 40px; width: 40px;"
                                                        class="img-fluid rounded" alt="">
                                                    <?php echo e($wall->title); ?></td>
                                                <td><?php echo e($wall->views); ?></td>
                                                <td><?php echo e(ucfirst($wall->visibility)); ?></td>
                                                <td style="text-align: center;">
                                                    <?php if($wall->status == 1): ?>
                                                        <span wire:click.prevent='changeStatus(<?php echo e($wall->id); ?>)' class="badge bg-success statusPreLoad" style="font-size: 12.5px; cursor: pointer;">Published</span>
                                                    <?php else: ?>
                                                        <span wire:click.prevent='changeStatus(<?php echo e($wall->id); ?>)' class="badge bg-danger statusPreLoad" style="font-size: 12.5px; cursor: pointer;">UnPublished<span>   
                                                    <?php endif; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu" style="width: auto;">
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(route('show.wall.feed', ['video'=>$wall->uid])); ?>"
                                                            target="_blank"><i class="ti ti-eye"></i> View Wall</a>

                                                        <a href="" wire:click.prevent="deleteConfirmation(<?php echo e($wall->id); ?>)"
                                                            class="dropdown-item"><i class="ti ti-trash"></i> Delete</a>
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
                        <?php echo e($walls->links('pagination-links')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('showEditModal', event => {
            $('#editUserModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#editUserModal').modal('hide');
        });

        //DeleteConfirmation
        window.addEventListener('show_wall_delete_confirmation', event => {
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
        window.addEventListener('wallDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Wall has been deleted successfully.',
                'success'
            )
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/wall/all-walls-component.blade.php ENDPATH**/ ?>