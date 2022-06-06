<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\EvryThingNotification;

class AddComment extends Component
{
    public $video;
    public $body;
    public $col;
    protected $listeners = ['commentCreate' => '$refresh'];


    public function mount(Video $video , $col)
    {
        $this->video = $video;
        $col == 0 ? $this->col = null : $this->col = $col;
    }

    public function render()
    {
        return view('livewire.add-comment');
    }

    public function addComment()
    {
        // Store comment
        if($this->body == null){
        }else{
            Auth::user()->Comments()->create([
               "body" => $this->body,
               "video_id" => $this->video->id,
               "replay_id" => $this->col,
           ]);
           $select = User::select('image_profile', 'username', 'id')->find($this->video->user_id);
           $response = [
               "image_profile" => Auth::user()->image_profile,
               "username" => $select->username,
               "message" => "commented Wall",
               "title" => $this->video->title,
               "type" => 'comment',
               "from_id" => Auth::user()->id,
           ];
           $select->notify(new EvryThingNotification($response));
           $this->body = '';
        }
        $this->emit("commentCreate");

    }
}
