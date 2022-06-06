<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Media;
use Livewire\Component;
use App\Models\like_m as like;
use App\Models\Media as Video;
use App\Models\dislike_m as Dislike;
use Illuminate\Support\Facades\Auth;
use App\Notifications\EvryThingNotification;

class Likedislike extends Component
{
    public $video;
    public $likes;
    public $dislikes;
    public $likeActive;
    public $dislikeActive;
    protected $listeners = ['load_views' => '$refresh'];



    public function mount(Video $video)
    {
        $this->video = $video;
        $this->checkIfLiked();
        $this->checkIfDisliked();
    }

    public function render()
    {
        $this->likes = $this->video->Likes_m()->count();
        $this->dislikes = $this->video->Dislikes_m()->count();
        return view('livewire.likedislike');
    }

    public function checkIfLiked()
    {
        $this->video->doesUserLikedVideo() ? $this->likeActive = true : $this->likeActive = false;
    }

    public function checkIfDisliked()
    {
        $this->video->doesUserDislikedVideo() ? $this->dislikeActive = true : $this->dislikeActive = false;
    }

    public function like()
    {
        if (Auth::check()) {
            if ($this->video->doesUserLikedVideo()) {
                Like::where('user_id', auth()->id())->where('media_id', $this->video->id)
                    ->delete();
                $this->likeActive = false;
            } else {
                $this->video->Likes_m()->create([
                    'user_id' => auth()->id(),
                ]);
                $this->disableDislike();
                $this->likeActive = true;
                $select = User::select('image_profile', 'username', 'id')->find($this->video->user_id);
                $response = [
                    "image_profile" => Auth::user()->image_profile,
                    "username" => $select->username,
                    "message" => "Liked Media",
                    "title" => $this->video->title,
                    "type" => 'like',
                    "from_id" => Auth::user()->id,
                ];
                $select->notify(new EvryThingNotification($response));
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

                Dislike::where('user_id', auth()->id())->where('media_id', $this->video->id)->delete();
                $this->dislikeActive = false;
            } else {

                $this->video->Dislikes_m()->create([
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
        Dislike::where('user_id', auth()->id())->where('media_id', $this->video->id)->delete();
        $this->dislikeActive = false;
    }
    public function disablelike()
    {
        Like::where('user_id', auth()->id())->where('media_id', $this->video->id)->delete();
        $this->likeActive = false;
    }
}
