<?php

namespace App\Http\Livewire\Admin;

use App\Models\Hubs;
use App\Models\Media;
use App\Models\User;
use App\Models\Wall;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $totalUser, $totalHubs, $totalMedia, $totalWalls;

    public function render()
    {
        $this->totalUser = User::where('role', 'user')->get()->count();
        $this->totalHubs = Hubs::all()->count();
        $this->totalMedia = Media::all()->count();
        $this->totalWalls = Wall::all()->count();

        return view('livewire.admin.dashboard-component')->layout('livewire.admin.layouts.base');
    }
}
