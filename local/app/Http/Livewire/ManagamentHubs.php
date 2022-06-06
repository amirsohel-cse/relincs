<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ManagamentHubs extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.managament-hubs' , [
            "hubs" => Hubs::select('user_id', 'uid', 'id', 'created_at','name','profile','visibility')->latest()->paginate(10),
        ]);
    }

    public function delete($id)
    {
        $hubs = Hubs::find($id);
        $profile = $hubs->profile;
        if($hubs->delete()){
            if(Storage::exists('public/profile_hubs/'.$profile)){
                Storage::delete('public/profile_hubs/'.$profile);
            }
                $this->dispatchBrowserEvent('deletehubs');
        }
    }
}
