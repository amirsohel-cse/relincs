@section('title')
    Cms Settings
@endsection
<div>
    <style>
        #customSwitchSuccess {
            font-size: 20px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Setting</li>
                            <li class="breadcrumb-item active">Cms Settings</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Cms Settings</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cms Settings</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Show Media in Latest
                                    Page</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-switch form-switch-success" style="margin-left: 25px; margin-top: 5px;">
                                        <input class="form-check-input showMedia" type="checkbox"
                                            id="customSwitchSuccess" @if ($show_latest_page_media == 1) checked @endif>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
        $(document).ready(function(){
            $('.showMedia').on('click', function(){
                @this.changeMediaStatus();
            });
        });
</script>
@endpush