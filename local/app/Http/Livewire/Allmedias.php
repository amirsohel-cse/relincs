<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Hubs;
use App\Models\Media;
use App\Models\Video;
use Livewire\Component;
use App\Models\Following;

class Allmedias extends Component
{
    public $loadedByFeed = 12;
    public $search = '';

    public function render()
    {
        return view('livewire.allmedias' , [
            "medias" => Media::query()->where('title','LIKE','%'.$this->search.'%')->latest()->paginate($this->loadedByFeed),
        ])->layout('layouts.explorer');
    }


    public function load()
    {
        sleep(1);
        $this->loadedByFeed += 12;
    }
}
