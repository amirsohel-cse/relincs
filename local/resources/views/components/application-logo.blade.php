<div class="relative">
    @php
        $logo = App\Models\SettingWebsite::where('id', 1)->first()->logo;
    @endphp
    <a href="{{route('home')}}">
        <img src="https://relincsca.s3.amazonaws.com/public/media/{{ $logo }}" class="w-36" alt="relincs.com">
    </a>
</div>
