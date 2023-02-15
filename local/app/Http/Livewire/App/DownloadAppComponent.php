<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class DownloadAppComponent extends Component
{
    public function render()
    {
        return view('livewire.app.download-app-component')->layout('layouts.app');
    }
}
