<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    public $firstname, $lastname, $email, $phone, $new_password, $confirm_password, $avatar, $uploadedAvatar;

    use WithFileUploads;

    public function mount()
    {
        $setting = User::where('id', Auth::user()->id)->first();
        if($setting != ''){
            $this->firstname = $setting->firstname;
            $this->lastname = $setting->lastname;
            $this->email = $setting->email;
            $this->uploadedAvatar = Auth::user()->profile();
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'avatar'=>'required_if:uploadedAvatar,null',
        ],[
            'avatar.*'=>'This field is required'
        ]);
    }

    public function updateHeader()
    {
        if($this->new_password != ''){
            $this->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
                'avatar'=>'required_if:uploadedAvatar,null',
                'new_password'=>'min:8|same:confirm_password'
            ],[
                'avatar.*'=>'This field is required'
            ]);
        }
        else{
            $this->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
                'avatar'=>'required_if:uploadedAvatar,null',
                'new_password'=>'same:confirm_password'
            ],[
                'avatar.*'=>'This field is required'
            ]);
        }



        $admin = User::where('id', Auth::user()->id)->first();
        $admin->firstname = $this->firstname;
        $admin->lastname = $this->lastname;
        if($this->avatar != ''){
            $imageName = uniqid() . $this->firstname . '.' . $this->avatar->extension();
            $this->avatar->storeAs('public/profile_image', $imageName);
            Storage::delete('public/profile_image/' . Auth::user()->image_profile);

            $admin->image_profile = $imageName;
        }

        if($this->new_password != ''){
            $admin->password = Hash::make($this->new_password);
        }

        $admin->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Profile updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.profile.profile-component')->layout('livewire.admin.layouts.base');
    }
}
