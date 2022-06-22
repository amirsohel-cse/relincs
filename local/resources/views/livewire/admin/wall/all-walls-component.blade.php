@section('title')
    Walls
@endsection
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
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
                                        <th>Status</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = $walls->perPage() * $walls->currentPage() - ($walls->perPage() - 1);
                                    @endphp
                                    @if ($walls->count() > 0)
                                        @foreach ($walls as $wall)
                                            <tr>
                                                <td>{{ $sl++ }}</td>
                                                <td><img src="{{ env('AWS_BUCKET_URL').$wall->path }}"
                                                        style="height: 40px; width: 40px;"
                                                        class="img-fluid rounded" alt="">
                                                    {{ $wall->title }}</td>
                                                <td>{{ $wall->views }}</td>
                                                <td>{{ ucfirst($wall->visibility) }}</td>
                                                <td>{{ $wall->status }}</td>
                                                <td style="text-align: center;">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu" style="width: auto;">
                                                        <a class="dropdown-item"
                                                            href="{{ route('show.wall.feed', ['video'=>$wall->uid]) }}"
                                                            target="_blank"><i class="ti ti-eye"></i> View Wall</a>
                                                        {{-- <a class="dropdown-item" href=""
                                                            wire:click.prevent="editUser({{ $wall->id }})"><i
                                                                class="ti ti-edit"></i> Edit</a>
                                                        <a href=""
                                                            wire:click.prevent="deleteConfirmation({{ $wall->id }})"
                                                            class="dropdown-item"><i class="ti ti-trash"></i> Delete</a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" style="text-align: center;">No data available!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{ $walls->links('pagination-links') }}
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
