<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DirectBox extends Component
{
    public $show = false;
    public $current_user;
    public $receiver_id;
    public $select_user_go_to_message;
    public function render()
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('livewire.direct-box', compact('users'))->layout('layouts.direct');
    }

    function goto($id) {
        $this->show = true;
        $select_user_go_to_message = User::select('username','id','image_profile')->find($id);
    }
}
