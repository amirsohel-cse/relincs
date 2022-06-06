<?php

namespace App\Http\Livewire;

use App\Models\HubWall;
use Livewire\Component;

class AllComment extends Component
{
    public $video;
    protected $listeners = ['commentCreate' => '$refresh'];

    public function mount(HubWall $video)
    {
        $this->video = $video;
        // dd($this->video);
        // dd($this->video->Comments());
    }

    public function render()
    {
        return view('livewire.all-comment');
    }
}
