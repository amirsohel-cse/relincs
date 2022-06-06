<?php

namespace App\Http\Livewire\Hubs\Bulltien;

use App\Models\hubbulletin;
use App\Models\Hubs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Display extends Component
{

    public function render()
    {
        $data = hubbulletin::where('user_id',Auth::user()->id)->paginate(7);
        return view('livewire.hubs.bulltien.display',compact('data'))->layout('layouts.app');
    }

    public function delete($id)
    {
        $data = hubbulletin::find($id);
        $data->delete();

        $this->dispatchBrowserEvent('delete_bulletin');
    }

}
