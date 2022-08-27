<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use App\Models\SettingWebsite;

class WebpageSettings extends Component
{
    public $show_latest_page_media;

    public function mount()
    {
        $data = SettingWebsite::where('id', 1)->first();
        $this->show_latest_page_media = $data->show_latest_page_media;
    }

    public function changeMediaStatus()
    {
        $getData = SettingWebsite::where('id', 1)->first();

        if($getData != ''){
            $data = $getData;
        }
        else{
            $data = new SettingWebsite();
        }

        if($this->show_latest_page_media == 1){
            $data->show_latest_page_media = 0;
        }
        else{
            $data->show_latest_page_media = 1;
        }
        $data->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Setting updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.setting.webpage-settings')->layout('livewire.admin.layouts.base');
    }
}
