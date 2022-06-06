<?php

namespace App\Http\Livewire\Hubs;

use App\Models\Following;
use App\Models\Hubs;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;

    public $followers;
    public $profileHubs;
    public $name;
    public $about;
    protected $rules = [
        "profileHubs" => 'image|max:1024',
        "name" => 'required|string|max:155',
        "about" => 'required|string|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function followers()
    {
        return Following::where('following_id', Auth::user()->id)->count();
    }

    // public function CheckRows($name,$about,$path)
    // {
    //     return User::where('name', $name)->where('about', $about)->where('profile', $path)->exists();
    // }

    public function render()
    {
        // if($this->followers() <= 300){
        //     abort(404,'You must have more then 300 followers to create a hubs');
        // }
        return view('livewire.hubs.create')->layout('layouts.app');
    }

    public function createChannel()
    {
        $this->validate();
        if ($this->profileHubs) {
            $fileName = $this->name . '_' . time() . '__' . rand() . '.' . $this->profileHubs->extension();
            $this->profileHubs->storeAs('public/profile_hubs', $fileName);
        }

        // if(!$this->CheckRows($this->name,$this->about,$fileName)){
            Auth::user()->hubs()->create([
                "profile" => $fileName,
                "name" => $this->name,
                "about" => $this->about,
            ]);
        // }

        User::find(Auth::user()->id)->update([
            'hubs' => Auth::user()->hubs === null ? 1 :  Auth::user()->hubs + 1,
        ]);

        $this->dispatchBrowserEvent('success');

        return redirect('/dashboard');
    }
}
