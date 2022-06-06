<?php

namespace App\Http\Livewire;

use App\Models\Following;
use App\Models\User;
use Livewire\Component;

class ListFollowers extends Component
{
    public $followers;
    public $following;

    public function mount()
    {
        $this->followers();
        $this->following();
        
    }

    public function followers()
    {
        $this->followers=Following::where('following_id', auth()->user()->id)->get();
    }

    public function following()
    {
        $this->following=Following::where('follow_id', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.list-followers');
    }
}
