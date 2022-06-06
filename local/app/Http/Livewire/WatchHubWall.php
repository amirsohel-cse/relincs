<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\HubWall;
use Livewire\Component;

class WatchHubWall extends Component
{
    public $wall;
    public $hub;

    public function mount(hubWall $wall)
    {
        $this->wall = $wall;
        $hub = Hubs::find($this->wall->hubs_id);
        $this->hub = $hub;
        // dd($this->hub,$this->wall);
    }

    public function render()
    {
        return view('livewire.watch-hub-wall')->layout('layouts.guest');
    }
}
