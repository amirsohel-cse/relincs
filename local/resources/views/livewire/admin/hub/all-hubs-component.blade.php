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
                            <li class="breadcrumb-item active">Hubs</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Hubs</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hubs</h4>
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
                                        <th>Name</th>
                                        <th>Visibility</th>
                                        <th>User</th>
                                        <th>Media</th>
                                        <th>Walls</th>
                                        <th>Bulletins</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = $hubs->perPage() * $hubs->currentPage() - ($hubs->perPage() - 1);
                                    @endphp
                                    @if ($hubs->count() > 0)
                                        @foreach ($hubs as $hub)
                                            <tr>
                                                <td>{{ $sl++ }}</td>
                                                <td><img src="{{ env('AWS_BUCKET_URL').'public/profile_hubs/'.$hub->profile }}"
                                                        style="height: 40px; width: 40px;"
                                                        class="img-fluid rounded" alt="">
                                                    {{ $hub->name }}</td>
                                                <td>{{ ucfirst($hub->visibility) }}</td>
                                                <td>{{ user($hub->user_id)->firstname }} {{ user($hub->user_id)->lastname }}</td>
                                                <td>{{ hubMedia($hub->id)->count() }}</td>
                                                <td>{{ hubWalls($hub->id)->count() }}</td>
                                                <td>{{ hubBulletins($hub->id)->count() }}</td>
                                                
                                                <td style="text-align: center;">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu" style="width: auto;">
                                                        <a class="dropdown-item"
                                                            href="{{ route('show.hubs', ['uid'=>$hub->uid]) }}"
                                                            target="_blank"><i class="ti ti-eye"></i> View Hub</a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('show.hubs', ['uid'=>$hub->uid]) }}"
                                                            target="_blank"><i class="ti ti-viewport-wide"></i> View Hub Medias</a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('show.hubs', ['uid'=>$hub->uid]) }}"
                                                            target="_blank"><i class="ti ti-viewport-wide"></i> View Hub Walls</a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('show.hubs', ['uid'=>$hub->uid]) }}"
                                                            target="_blank"><i class="ti ti-viewport-wide"></i> View Hub Bulletins</a>

                                                        <a href="" wire:click.prevent="deleteConfirmation({{ $hub->id }})"
                                                            class="dropdown-item"><i class="ti ti-trash"></i> Delete</a>
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
                        {{ $hubs->links('pagination-links') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        window.addEventListener('show_hub_delete_confirmation', event => {
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
        window.addEventListener('hubDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Hub has been deleted successfully.',
                'success'
            )
        });
    </script>
@endpush
