<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\messages;
use Illuminate\Support\Facades\Auth;

class Allmessages extends Component
{

    public $data;
    public $message;
    public $ditails;
    protected $listeners = ['mefresh' => '$refresh'];

    public function mount(messages $id)
    {
        $this->ditails = User::where('id' , $id->to_id)->select('username','created_at', 'image_profile','id')->first();
        // $this->data =  messages::Where('from_id', Auth::user()->id)
        // ->orWhere('to_id', $id->to_id)
        // ->orWhere('from_id', $id->to_id)
        // ->orWhere('from_id', $id->from_id)
        // ->orWhere('to_id', $id->from_id)
        // ->orderBy('id', 'asc')
        // ->get();
        $this->data =  messages::where('from_id', Auth::user()->id)
        ->orWhere('to_id', $id->to_id)
        ->orWhere('from_id', $id->to_id)
        ->orWhere('from_id', $id->from_id)
        ->orWhere('to_id', $id->from_id)
        ->where('message','!=', Null)
        ->select('message','created_at','to_id','from_id','id')
        ->orderBy('id', 'asc')
        ->whereNotNull('message')
        ->get();
        // dd($this->data);
    }

    public function render()
    {
        return view('livewire.allmessages');
    }

    public function sendMessage($id)
    {
        $this->validate([
            'message' => "required|string",
        ]);
        if ($this->message !== '') {
            $result = messages::create([
                'from_id' => Auth::user()->id,
                'to_id' => $id,
                'message' => $this->message,
                'uid' => uniqid(true),
            ]);

            if ($result) {
                $this->message = '';
                $this->emit('mefresh');
            }
        }
    }

}
