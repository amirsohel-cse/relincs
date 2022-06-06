<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class AllComments extends Component
{
    public $video;
    protected $listeners = ['commentCreate' => '$refresh'];

    public function mount(Video $video)
    {
        $this->video = $video;
        // dd($this->video->Comments());
    }

    public function render()
    {
        return view('livewire.all-comments');
    }
}
