<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ManagementUser extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.management-user', [
            "users" => User::select('username', 'id', 'image_profile', 'created_at')->latest()->paginate(10),
        ]);
    }

    public function delete(User $id)
    {
        $profile = $id->image_profile;
        $username = $id->username;
        if($id->delete()){
            if(Storage::exists('public/profile_image/'.$profile)){
                Storage::delete('public/profile_image/'.$profile);
            }
                session()->flash('deleteUser' , 'Delete User '.$username.' Successfully');
                $this->dispatchBrowserEvent('deleteUser' , [
                    "user" => $username,
                ]);
        }
    }
}
