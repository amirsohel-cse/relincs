<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscribe as ModelsSubscribe;

class Subscribe extends Component
{
    public $user_id;
    public $color = 'red';
    public $following;
    // protected $listeners=['load_count' => '$refresh'];

    public function mount(ModelsSubscribe $following)
    {
        $this->following = $following;
            $this->check_is_another_user();
            $this->check_is_follow();
    }

    public function check_is_another_user()
    {
        return $this->user_id !== auth()->id();
    }

    public function check_is_follow()
    {
        return ModelsSubscribe::where('follow_id',auth()->id())->where('following_id' , $this->user_id)->exists();
        
    }

    public function render()
    {
        return view('livewire.subscribe');
    }

    public function Following()
    {
        ModelsSubscribe::create([
            'follow_id' => auth()->user()->id,
            'following_id' => $this->user_id,
        ]);
        // $this->emit('load_count');
    }

    public function Unfollow() 
    {
       ModelsSubscribe::where('follow_id',auth()->user()->id)->where('following_id' , $this->user_id)->delete();
        // $this->emit('load_count');
    }
}
