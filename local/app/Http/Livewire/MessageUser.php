<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class MessageUser extends Component
{
    public User $user;
    public function render()
    {
        // dd($this->user);
        return view('livewire.message-user');
    }
}
