@section('title')
    Hub Media
@endsection
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.allHubs') }}">Hubs</a></li>
                            <li class="breadcrumb-item active">Media</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Media</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hub Media</h4>
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
                                        <th>Duration</th>
                                        <th>Visibility</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = $medias->perPage() * $medias->currentPage() - ($medias->perPage() - 1);
                                    @endphp
                                    @if ($medias->count() > 0)
                                        @foreach ($medias as $media)
                                            <tr>
                                                <td>{{ $sl++ }}</td>
                                                <td>
                                                    <img src="{{ env('AWS_BUCKET_URL').'hubs/media/'.$media->uid.'/'.$media->thumbnail_image }}"
                                                    style="height: 40px; width: 40px;"
                                                    class="img-fluid rounded" alt="">
                                                    {{ $media->title }}
                                                </td>
                                                <td>{{ $media->views }}</td>
                                                <td>{{ $media->duration }}</td>
                                                <td>{{ ucfirst($media->visibility) }}</td>
                                                <td style="text-align: center;">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu" style="width: auto;">
                                                        <a href="{{ route('watch.hubs.media', ['media'=>$media->uid]) }}"
                                                            class="dropdown-item" target="_blank"><i class="ti ti-eye"></i> View</a>
                                                        <a href="" wire:click.prevent="deleteConfirmation({{ $media->id }})"
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
                        {{ $medias->links('pagination-links') }}
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
        window.addEventListener('show_media_delete_confirmation', event => {
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
        window.addEventListener('mediaDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Media has been deleted successfully.',
                'success'
            )
        });
    </script>
@endpush
