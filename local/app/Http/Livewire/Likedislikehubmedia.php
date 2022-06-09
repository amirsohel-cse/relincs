<?php

namespace App\Http\Livewire;

use App\Models\DisLikeHubMedia;
use App\Models\HubMedia;
use App\Models\LikeHubMedia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Likedislikehubmedia extends Component
{
    public $likes, $dislikes, $likeActive, $dislikeActive;

    public $media_id;

    public function mount($media)
    {
        $this->media_id = $media->id;
    }

    public function like()
    {
        $checkLikes = LikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
        if($checkLikes->count() > 0){
            foreach($checkLikes as $likes){
                $likes = LikeHubMedia::find($likes->id);
                $likes->delete();
            }
        }
        else{
            $like = new LikeHubMedia();
            $like->media_id = $this->media_id;
            $like->user_id = Auth::user()->id;
            $like->save();

            $checkDisLikes = DisLikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
            if($checkDisLikes->count() > 0){
                foreach($checkDisLikes as $likes){
                    $likes = DisLikeHubMedia::find($likes->id);
                    $likes->delete();
                }
            }
        }
    }

    public function dislike()
    {
        $checkDisLikes = DisLikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
        if($checkDisLikes->count() > 0){
            foreach($checkDisLikes as $likes){
                $likes = DisLikeHubMedia::find($likes->id);
                $likes->delete();
            }
        }
        else{
            $like = new DisLikeHubMedia();
            $like->media_id = $this->media_id;
            $like->user_id = Auth::user()->id;
            $like->save();

            $checkLikes = LikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
            if($checkLikes->count() > 0){
                foreach($checkLikes as $likes){
                    $likes = LikeHubMedia::find($likes->id);
                    $likes->delete();
                }
            }
        }
    }

    public function render()
    {
        $likes = LikeHubMedia::where('media_id', $this->media_id)->get();
        $this->likes = $likes->count();

        $dislikes = DisLikeHubMedia::where('media_id', $this->media_id)->get();
        $this->dislikes = $dislikes->count();

        $checkMyLike = LikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
        if($checkMyLike->count() > 0){
            $this->likeActive = true;
        }
        else{
            $this->likeActive = false;
        }

        $checkMyDisLike = DisLikeHubMedia::where('user_id', Auth::user()->id)->where('media_id', $this->media_id)->get();
        if($checkMyDisLike->count() > 0){
            $this->dislikeActive = true;
        }
        else{
            $this->dislikeActive = false;
        }

        return view('livewire.likedislikehubmedia');
    }
}
