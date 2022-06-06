<?php

namespace App\Http\Livewire\Explorer;

use App\Models\Hubs as ModelsHubs;
use Livewire\Component;
use Livewire\WithPagination;

class Hubs extends Component
{
    use WithPagination;
    public $loadedByFeed = 10;
    public function render()
    {
        return view('livewire.explorer.hubs', [
            "hubs" => ModelsHubs::query()->latest()->paginate(10),
        ])->layout('layouts.explorer');
    }

    public function load()
    {
        $this->loadedByFeed += 10;
        // dd($this->loadedByFeed); 
    }
}
