<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $getUser = User::where('email', $this->email)->where('role', 'admin')->first();

        if ($getUser != '') {
            if (Hash::check($this->password, $getUser->password)) {
                Auth::attempt(['email' => $this->email, 'password' => $this->password]);

                $this->dispatchBrowserEvent('success', ['message' => 'Login Successful']);
                return redirect()->route('admin.dashboard');
            } else {
                session()->flash('errorMessage', 'Invalid email or password');
            }
        } else {
            session()->flash('errorMessage', 'Invalid email or password');
        }
    }


    public function render()
    {
        return view('livewire.admin.auth.login-component')->layout('livewire.admin.auth.layout');
    }
}
