<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Admin Profile</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5><strong>Profile</strong></h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='updateHeader'>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="firstname" placeholder="Enter first name">
                                    @error('firstname')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="lastname" placeholder="Enter last name">
                                    @error('lastname')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="email" placeholder="Enter email">
                                    @error('email')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="new_password" placeholder="Enter new password" wire:model='new_password'>
                                    @error('new_password')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="confirm_password" placeholder="Enter confirm password" wire:model='confirm_password'>
                                    @error('confirm_password')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Avatar <small>(128x128)</small></label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="avatar">
                                    @error('avatar')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <div wire:loading="avatar" wire:target="avatar" wire:key="avatar" style="font-size: 12.5px;" class="mr-2"><i class="fa fa-spinner fa-spin mt-3 ml-2"></i> Uploading</div>

                                    @if ($avatar)
                                        <img src="{{ $avatar->temporaryUrl() }}" class="mt-2 mb-2 rounded-circle" width="85" height="85" />
                                    @elseif($uploadedAvatar != '')
                                        <img src="{{ $uploadedAvatar }}" class="mt-2 mb-2 rounded-circle" width="85" height="85" />
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row mt-4">
                                <div class="col-md-12" style="text-align: right;">
                                    <button class="btn btn-primary" style="width: 100px;">{!! loadingStateWithText('updateHeader', 'Save') !!}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>