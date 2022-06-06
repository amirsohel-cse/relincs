<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\HubMedia;
use App\Models\CommentMedia;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Notifications\EvryThingNotification;

class AddCommentMedia extends Component
{
    use WithPagination;
    public $data;
    public $comment;
    public $col;
    public $comments;
    protected $listeners = ['commentCreate' => '$refresh'];

    public function mount(HubMedia $data, $col)
    {
        $this->data = $data;
        $col == 0 ? $this->col = null : $this->col = $col;
        // $this->comments = 
    }

    public function render()
    {
        $com = CommentMedia::where('media_id', $this->data->id)->orderBy('created_at','desc')->paginate(8);
        return view('livewire.add-comment-media' , compact('com'));
    }

    public function addComment()
    {
        $this->validate([
            "comment" => "required|string|min:4|unique:comment_media,body",
        ]);

        if ($this->comment == null) {
        } else {
            Auth::user()->CommentMedia()->create([
                "body" => $this->comment,
                "media_id" => $this->data->id,
                "replay_id" => $this->col,
            ]);
            $select = User::select('image_profile', 'username', 'id')->find($this->data->user_id);
            $response = [
                "image_profile" => Auth::user()->image_profile,
                "username" => $select->username,
                "message" => "commented Media hub",
                "title" => 'media'.$this->data->title,
                "type" => 'comment',
                "from_id" => Auth::user()->id,
            ];
            $select->notify(new EvryThingNotification($response));
            $this->comment = '';
        }
        session()->flash('success', 'Comment has been submited');
        $this->emit("commentCreate");
    }

}
