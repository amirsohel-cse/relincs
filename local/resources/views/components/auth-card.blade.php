<div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div style="margin-top: 100px;">
        @php
            $site_logo = App\Models\SettingWebsite::where('id', 1)->first()->logo;
        @endphp
        
        <img src="https://relincsca.s3.amazonaws.com/public/media/{{ $site_logo }}" class="w-36" alt="relincs.com">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="margin-bottom: 180px;">
        {{ $slot }}
    </div>
</div>
