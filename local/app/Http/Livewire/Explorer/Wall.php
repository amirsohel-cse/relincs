<?php

namespace App\Http\Livewire\Explorer;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class Wall extends Component
{
    use WithPagination;
    public $loadedByFeed = 12;
    public $search = '';

    public function render()
    {
        return view('livewire.explorer.wall' , [
            "feed" => Video::query()->where('title','LIKE','%'.$this->search.'%')->where('processed' , 0)->latest()->paginate($this->loadedByFeed),
            "video" => Video::query()->where('title','LIKE','%'.$this->search.'%')->where('processed' , 1)->latest()->paginate($this->loadedByFeed)
        ])->layout('layouts.explorer');
    }
    public function load()
    {
        $this->loadedByFeed += 12;
    }
}
