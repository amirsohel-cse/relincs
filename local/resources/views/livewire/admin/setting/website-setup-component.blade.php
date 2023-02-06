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
                                        <img src="https://relincsca.s3.amazonaws.com/public/media/{{ $uploadedLogo }}" width="120" class="mt-2 mb-2" />
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Fav Icon</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="fav_icon">
                                    @error('fav_icon')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror

                                    <div wire:loading="fav_icon" wire:target="fav_icon" wire:key="fav_icon" style="font-size: 12.5px;" class="mr-2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading</div>

                                    @if ($fav_icon)
                                        <img src="{{ $fav_icon->temporaryUrl() }}" width="120" class="mt-2 mb-2" />
                                    @elseif($uploadedFavIcon != '')
                                        <img src="https://relincsca.s3.amazonaws.com/public/media/{{ $uploadedFavIcon }}" width="120" class="mt-2 mb-2" />
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
</div>
