<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Replaycomments extends Component
{
    public $video;
    public $body;
    public $col;
    protected $listeners = ['commentReplay' => '$refresh'];
    public function mount(Video $video, $col)
    {
        $this->video = $video;
        $col == 0 ? $this->col = null : $this->col = $col;
        
    }
    public function render()
    {
        return view('livewire.replaycomments');
    }
    public function addComment()
    {
        // Store comment
        if ($this->body == null) {
        } else {
            Auth::user()->Comments()->create([
                "body" => $this->body,
                "video_id" => $this->video->id,
                "replay_id" => $this->col,
            ]);

            $this->body = '';
        }
        $this->emit('commentReplay');
    }
}
