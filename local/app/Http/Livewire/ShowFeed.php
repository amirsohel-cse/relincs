<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Video;
use Livewire\Component;
use App\Models\Following;
use Iman\Streamer\VideoStreamer;

class ShowFeed extends Component
{
    public $video;

    public $likes;

    public $user;

    public $path;

    public $next;

    public $prev;

    public function mount(Video $video)
    {
        $this->likes = $this->video->Likes()->count();
        $this->video = $video;
        $this->user = User::find($this->video->user_id);
        $this->next = Video::query()->select('uid','id','title')->where('id', '>', $this->video->id)->oldest()->first();
        $this->prev = Video::query()->select('uid','id','title')->where('id', '<', $this->video->id)->latest()->first();
        // dd('next',$this->next->id,'prev',$this->prev->id);
    }

    public function profile_published()
    {
        return asset('storage/profile_image/' . $this->user->image_profile);
    }

    public function render()
    {
        return view('livewire.show-feed')
            ->layout('layouts.guest');
    }

    public function countView()
    {
        $this->video->update([
            'views' => $this->video->views + 1
        ]);
    }

    public function count_subscribe()
    {
        return Following::where('following_id', $this->video->user_id)->count();
    }
}
