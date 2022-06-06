<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\Join;
use App\Models\User;
use Livewire\Component;
use App\Models\HubMedia;

class WatchHubMedia extends Component
{
    public $media;
    public $user;
    public $hub;
    protected $listeners = ['VideoViewed' => 'countView'];

    public function mount($media)
    {
        $media = HubMedia::where('uid', $media)->first();
        $this->media = $media;
        if($this->media){
        $this->hub = Hubs::where('id', $this->media->hubs_id)->select('id', 'name', 'uid', 'profile')->first();
        // dd($this->hub);
        $this->user = User::find($this->media->user_id);
          
        }else{
            abort(404);
        }
    }

    public function profile_published()
    {
        return asset('storage/profile_image/' . $this->user->image_profile);
    }

    public function render()
    {
        $medias = HubMedia::where('hubs_id', $this->media->hubs_id)->select('id','uid','title','thumbnail_image','created_at','views','views','user_id')->paginate(10);
        return view('livewire.watch-hub-media',compact('medias'))->layout('layouts.guest');
    }

    public function countView()
    {
        $this->media->update([
            'views' => $this->media->views + 1
        ]);
    }

    public function count_joiner($id)
    {
        return Join::where('joining_id', $id)->count();
    }

}
