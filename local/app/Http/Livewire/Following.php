<?php

namespace App\Http\Livewire;

use App\Models\Following as Following_m;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Following extends Component
{
    public $color = 'indigo';
    public $user_id;
    public $following;

    public function mount(Following_m $following)
    {
        $this->following = $following;
        if (Auth::check()) {
            $this->check_is_another_user();
            $this->check_is_follow();
        }
    }

    public function check_is_another_user()
    {
        return $this->user_id !== auth()->user()->id;
    }

    public function check_is_follow()
    {
        return Following_m::where('follow_id',auth()->id())->where('following_id' , $this->user_id)->exists();
        
    }

    public function render()
    {
        return view('livewire.following');
    }

    public function Following()
    {
        Following_m::create([
            'follow_id' => auth()->user()->id,
            'following_id' => $this->user_id,
        ]);
        $this->emit('load_count');
    }

    public function Unfollow() 
    {
       Following_m::where('follow_id',auth()->id())->where('following_id' , $this->user_id)->delete();
        $this->emit('load_count');
    }
    public function redirectToEditProfile() 
    {
       return redirect()->route('dash.setting.profile');
    }
}
