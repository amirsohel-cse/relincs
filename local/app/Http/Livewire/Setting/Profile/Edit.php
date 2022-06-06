<?php

namespace App\Http\Livewire\Setting\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $user;
    public $image, $username,$firstname, $lastname, $country, $city, $email, $about, $gender, $date_birth , $link;
    protected $rules = [
        'username' => 'required|string',
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'country' => 'required|string',
        'city' => 'required|string',
        'email' => 'required|string',
        'about' => 'string',
        'gender' => 'required|string',
        'date_birth' => 'required|string',
    ];
    public function mount()
    {
        $this->user = Auth::user();
        $this->username = $this->user->username;
        $this->firstname = $this->user->firstname;
        $this->lastname = $this->user->lastname;
        $this->country = $this->user->coutry;
        $this->city = $this->user->city;
        $this->email = $this->user->email;
        $this->about = $this->user->about;
        $this->gender = $this->user->gender;
        $this->date_birth = $this->user->data_birth;
        $this->link = $this->user->link;
    }


    public function render()
    {
        return view('livewire.setting.profile.edit')
            ->layout('layouts.app');
    }

    public function editProfile()
    {
        sleep(1);
        $imageName = null;
        if ($this->image === null) {
            $imageName = $this->user->image_profile;
        }else{
            $imageName = uniqid() . $this->firstname . '.' . $this->image->extension();
            $this->image->storeAs('public/profile_image', $imageName);
            Storage::delete('public/profile_image/' . $this->user->image_profile);
        }

       $this->user->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'image_profile' => $imageName,
            'data_birth' => $this->date_birth,
            'coutry' => $this->country,
            'city' => $this->city,
            'gender' => $this->gender,
            'about' => $this->about === null ? null : $this->about,
            'username' => $this->username,
            'link' => $this->link,
        ]);

        $this->dispatchBrowserEvent('edit_profile');

        return redirect()->route('gu.profile.show', ["name" => $this->user->id]);
    }
}
