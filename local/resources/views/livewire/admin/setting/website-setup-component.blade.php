@section('title')
    Website Setup
@endsection
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Setting</li>
                            <li class="breadcrumb-item active">Website Setup</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Website Setup</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Website Setup</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='storeData'>
                            <h6><strong>Header</strong></h6>
                            <hr>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Logo</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="logo">
                                    @error('logo')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
    
                                    <div wire:loading="logo" wire:target="logo" wire:key="logo" style="font-size: 12.5px;" class="mr-2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading</div>
    
                                    @if ($logo)
                                        <img src="{{ $logo->temporaryUrl() }}" width="120" class="mt-2 mb-2" />
                                    @elseif($uploadedLogo != '')
                                        <img src="https://relincsca.s3.amazonaws.com/public/media/{{ $uploadedLogo }}" width="70" height="70" class="mt-2 mb-2 rounded-circle" />
                                    @endif
                                </div>
                            </div>
                            
                            <h6><strong>Footer</strong></h6>
                            <hr>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Copyright Text</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="copyright_text" placeholder="Enter text">
                                    @error('copyright_text')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Instagram Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="instagram_url" placeholder="Enter url">
                                    @error('instagram_url')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Facebook Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="facebook_url" placeholder="Enter url">
                                    @error('facebook_url')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Youtube Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="youtube_url" placeholder="Enter url">
                                    @error('youtube_url')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Twitter Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="twitter_url" placeholder="Enter url">
                                    @error('twitter_url')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-sm btn-primary btnPreLoad">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div wire:ignore.self class="modal fade" id="editUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="editUserModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='updateUser'>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Profile Image</label>
                            <div class="col-sm-9">
                                <input class="form-control mb-2" type="file" wire:model="profile_image">
                                @error('profile_image')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror

                                <div wire:loading="profile_image" wire:target="profile_image" wire:key="profile_image" style="font-size: 12.5px;" class="mr-2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading</div>

                                @if ($profile_image)
                                    <img src="{{ $profile_image->temporaryUrl() }}" width="70" height="70" class="mt-2 mb-2 rounded-circle" />
                                @elseif($uploadedImage != '')
                                    <img src="https://relincsca.s3.amazonaws.com/public/profile_image/{{ $uploadedImage }}" width="70" height="70" class="mt-2 mb-2 rounded-circle" />
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" wire:model="first_name" placeholder="Enter first name">
                                @error('first_name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" wire:model="last_name" placeholder="Enter last name">
                                @error('last_name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" wire:model="email" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" wire:model="username" placeholder="Enter user">
                                @error('username')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" wire:model="password" placeholder="Enter new password">
                                @error('password')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-sm btn-primary btnPreLoad">Submit</button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" wire:click.prevent="resetInputs">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

</div>

@push('scripts')
    <script>
        window.addEventListener('showEditModal', event => {
            $('#editUserModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#editUserModal').modal('hide');
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
@endpush
