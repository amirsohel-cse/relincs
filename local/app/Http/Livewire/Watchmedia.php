<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Media;
use Livewire\Component;
use App\Models\Following;
use App\Models\Subscribe;

class Watchmedia extends Component
{
    public $media;
    public $share = false;
    public $user;
    protected $listeners = ['VideoViewed' => 'countView'];

    public function mount(Media $media)
    {
        $this->media = $media;
        $this->user = User::find($this->media->user_id);
    }

    public function profile_published()
    {
        return asset('storage/storage/profile_image/' . $this->user->image_profile);
    }

    public function render()
    {
        return view('livewire.watchmedia')->layout('layouts.guest');
    }

    public function countView()
    {
        $this->media->update([
            'views' => $this->media->views + 1
        ]);
    }

    public function count_subscribe()
    {
        return Subscribe::where('following_id', $this->media->user_id)->count();
    }

    public function share()
    {
        $this->share = !$this->share;
    }
}
