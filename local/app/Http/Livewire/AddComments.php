<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\HubWall as Video;
use App\Models\User;
use App\Notifications\EvryThingNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddComments extends Component
{

    public $video;
    public $hubs;
    public $body;
    public $col;
    protected $listeners = ['commentCreate' => '$refresh'];


    public function mount(Video $video, $col)
    {
        $this->video = $video;
        $this->hubs = Hubs::find($video->hubs_id);
        // dd($this->hubs);
        $col == 0 ? $this->col = null : $this->col = $col;
    }

    public function render()
    {
        return view('livewire.add-comments');
    }
    public function addComment()
    {
        // Store comment
        if ($this->body == null) {
        } else {
            Auth::user()->wallcomment()->create([
                "body" => $this->body,
                "video_id" => $this->video->id,
                "replay_id" => $this->col,
            ]);
            $select = User::select('image_profile', 'username', 'id')->find($this->video->user_id);
            $response = [
                "image_profile" => Auth::user()->image_profile,
                "username" => $select->username,
                "message" => "commented Wall Of Hubs".$this->hubs->name,
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
