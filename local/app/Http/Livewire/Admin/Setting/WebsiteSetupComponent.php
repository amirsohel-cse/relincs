<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\SettingWebsite;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class WebsiteSetupComponent extends Component
{
    use WithFileUploads;
    public $logo, $copyright_text, $facebook_url, $twitter_url, $youtube_url, $instagram_url, $uploadedLogo;

    public function mount()
    {
        $data = SettingWebsite::where('id', 1)->first();
        $this->uploadedLogo = $data->logo;
        $this->copyright_text = $data->copyright_text;
        $this->facebook_url = $data->facebook_url;
        $this->twitter_url = $data->twitter_url;
        $this->youtube_url = $data->youtube_url;
        $this->instagram_url = $data->instagram_url;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'copyright_text'=>'required',
            'facebook_url'=>'required',
            'twitter_url'=>'required',
            'youtube_url'=>'required',
            'instagram_url'=>'required',
            'logo'=>'required_if:uploadedLogo,null',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'copyright_text'=>'required',
            'facebook_url'=>'required',
            'twitter_url'=>'required',
            'youtube_url'=>'required',
            'instagram_url'=>'required',
            'logo'=>'required_if:uploadedLogo,null',
        ]);

        $getData = SettingWebsite::where('id', 1)->first();

        if($getData != ''){
            $data = $getData;
        }
        else{
            $data = new SettingWebsite();
        }

        $data->copyright_text = $this->copyright_text;
        $data->facebook_url = $this->facebook_url;
        $data->twitter_url = $this->twitter_url;
        $data->youtube_url = $this->youtube_url;
        $data->instagram_url = $this->instagram_url;

        if($this->logo != ''){
            $imageName = uniqid() . '_logo.' . $this->logo->extension();
            $this->logo->storeAs('public/media', $imageName);
            Storage::delete('public/media/' . $data->logo);
            
            $data->logo = $imageName;
        }

        $data->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Setting updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.setting.website-setup-component')->layout('livewire.admin.layouts.base');
    }
}
