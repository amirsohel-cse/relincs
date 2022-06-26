<?php

namespace App\Http\Livewire\Admin\Layouts\Inc;

use App\Models\SettingWebsite;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $setting = SettingWebsite::where('id', 1)->first();
        return view('livewire.admin.layouts.inc.sidebar', ['setting'=>$setting]);
    }
}
