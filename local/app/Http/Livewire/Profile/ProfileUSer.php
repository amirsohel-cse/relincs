<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use App\Models\Following;
use App\Models\Media;
use App\Models\profileMarked;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class ProfileUSer extends Component
{
    public User $user;
    public $video;
    public $media;
    public $listfollow = false;
    public $iframe = false;
    public $marked = false;
    protected $listeners=['load_count' => '$refresh'];

    public function mount(User $name)
    {
        if(Auth::check()){
            $this->user = $name;
            // dd($this->user);
            $this->video = $this->user->videos()->get();;
            $this->media = $this->user->medias()->get();;
            $this->count_followers();
            $this->count_following();
            $this->count_wall();

            if(profilemarked::where('markkard_id' , Auth::user()->id)->exists()){
                $this->marked = true;
            }else{
                $this->marked = false;
            }
        }else{
            return redirect()->route('login');
        }


    }

    public function render()
    {
        return view('livewire.profile.profile-u-ser')->layout('layouts.guest');
    }
    public function count_followers()
    {
        return Following::where('following_id', $this->user->id)->count();
    }

    public function count_following()
    {
        return Following::where('follow_id', $this->user->id)->count();
    }

    public function count_wall()
    {
        return Video::where('user_id', $this->user->id)->count();
    }

    public function count_media()
    {
        return Media::where('user_id', $this->user->id)->count();
    }

    public function bookmarking()
    {
        if(profilemarked::where('markkard_id' , Auth::user()->id)->exists()){
            profilemarked::where('markkard_id', Auth::user()->id)->where('markshod_id',$this->user->id)->delete();
            $this->marked = false;
            $this->dispatchBrowserEvent("exist_save");
            $this->emit('load_count');
        }else{
            profilemarked::create([
                "markkard_id" =>  Auth::user()->id,
                "markshod_id" => $this->user->id,
            ]);
            $this->marked = true;
            $this->dispatchBrowserEvent("not_save");
            $this->emit('load_count');
        }

    }

    public function frame()
    {
        $this->iframe = true;
    }

    public function toggle()
    {
        $this->listfollow = !$this->listfollow;
    }


}
