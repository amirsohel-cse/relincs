<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\User;
use App\Models\Video;
use App\Models\Dislike;
use Livewire\Component;
use App\Models\MarkWall;
use App\Notifications\EvryThingNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class Voting extends Component
{
    public $video;
    public $likes;
    public $user;
    public $dislikes;
    public $likeActive;
    public $marks;
    public $marked;
    public $dislikeActive;

    protected $listeners = ['load_views' => '$refresh'];

    public function mount(Video $video)
    {
        $this->video = $video;
        $this->checkIfLiked();
        $this->checkIfDisliked();
        $this->checkIfmarkd();
    }

    // public function sendNotify($data)
    // {
    //     $select = User::select('image_profile', 'username', 'id')->find($this->video->user_id);
    //     $response = [
    //         "image_profile" => Auth::user()->image_profile,
    //         "username" => $select->username,
    //         // "wall_id" => $id->title,
    //     ];
    //     $select->notify(new EvryThingNotification($response));
    // }

    public function mark()
    {
        if (Auth::check()) {
            if ($this->video->doesUsermarkedVideo()) {
                MarkWall::where('user_id', auth()->id())->where('video_id', $this->video->id)
                    ->delete();
                $this->dispatchBrowserEvent('unmarked');
                $this->marked = false;
            } else {
                $this->video->marks()->create([
                    'user_id' => auth()->id(),
                ]);
                $this->dispatchBrowserEvent('marked');
                $this->marked = true;
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function checkIfLiked()
    {
        $this->video->doesUserLikedVideo() ? $this->likeActive = true : $this->likeActive = false;
    }

    public function checkIfmarkd()
    {
        $this->video->doesUsermarkedVideo() ? $this->marked = true : $this->marked = false;
    }


    public function checkIfDisliked()
    {
        $this->video->doesUserDislikedVideo() ? $this->dislikeActive = true : $this->dislikeActive = false;
    }

    public function render()
    {
        $this->likes = $this->video->Likes()->count();
        return view('livewire.voting');
    }

    public function like()
    {
        // dd($this->user);

        if (Auth::check()) {
            if ($this->video->doesUserLikedVideo()) {
                Like::where('user_id', auth()->id())->where('video_id', $this->video->id)
                    ->delete();
                $this->likeActive = false;
            } else {
                $this->video->Likes()->create([
                    'user_id' => auth()->id(),
                ]);
                $this->disableDislike();
                $select = User::select('image_profile', 'username', 'id')->find($this->video->user_id);
                $response = [
                    "image_profile" => Auth::user()->image_profile,
                    "username" => $select->username,
                    "message" => "Liked Wall",
                    "title" => $this->video->title,
                    "type" => 'like',
                    "from_id" => Auth::user()->id,
                ];
                $select->notify(new EvryThingNotification($response));
                $this->likeActive = true;
                // Notification 
            }
            
            $this->emit('load_views');
        } else {
            return redirect()->route('login');
        }
    }

    public function dislike()
    {
        if (Auth::check()) {
            if ($this->video->doesUserDislikedVideo()) {

                Dislike::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
                $this->dislikeActive = false;
            } else {

                $this->video->Dislikes()->create([
                    'user_id' => auth()->id(),
                ]);
                $this->disablelike();
                $this->dislikeActive = true;
            }
            $this->emit('load_views');
        } else {
            return redirect()->route('login');
        }
    }

    public function disableDislike()
    {
        Dislike::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
        $this->dislikeActive = false;
    }
    public function disablelike()
    {
        Like::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
        $this->likeActive = false;
    }
}
