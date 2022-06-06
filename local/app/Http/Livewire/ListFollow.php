<?php

namespace App\Http\Livewire;

use App\Models\Following;
use App\Models\User;
use Livewire\Component;

class ListFollow extends Component
{
    public $user;
    public $followers;
    public $following;
    public function mount(User $user)
    {
        $this->user = $user;
        $this->followers = Following::where('following_id' , $user->id)->distinct()->get();
        $this->following = Following::where('follow_id' , $user->id)->distinct()->get();
    }

    public function render()
    {
        return view('livewire.list-follow');
    }
}
