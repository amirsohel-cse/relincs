<?php

namespace App\Http\Livewire\Explorer;
use App\Models\User;
use Livewire\Component;
use App\Models\Following;
use Livewire\WithPagination;

class Profiles extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.explorer.profiles', [
            "users" => User::query()->latest()->paginate(10),
        ])->layout('layouts.explorer');
    }
    
    public function count_followers($id)
    {
        return Following::where('following_id', $id)->count();
    }

}
