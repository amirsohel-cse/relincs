<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\messages;
use Illuminate\Support\Facades\Auth;

class SendMessage extends Component
{
    public $user_id;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function render()
    {
        return view('livewire.send-message');
    }

    public function send($user_id){
        if(messages::where('from_id', Auth::user()->id)->where('to_id' , $user_id)->exists() === false &&
        messages::where('to_id', Auth::user()->id)->where('from_id' , $user_id)->exists() === false){
            messages::create([
                'from_id' => Auth::user()->id,
                'to_id' => $user_id,
                'uid' => uniqid(true),
            ]);
            messages::create([
                'from_id' => $user_id,
                'to_id' => Auth::user()->id,
                'uid' => uniqid(true),
            ]);
        }

        return redirect()->route('dash.show.message');
    }
}
