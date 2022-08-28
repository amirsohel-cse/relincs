<?php

namespace App\Http\Livewire\App\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUsComponent extends Component
{
    public $name, $email, $message;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    }

    public function submitContactMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data['send_to'] = 'support@relincs.com';
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['content'] = $this->message;

        Mail::send('emails.support', $data, function($message) use ($data) {
            $message->to($data['send_to'])
            ->subject('Support Message');
        });

        session()->flash('success_message','Support message sent successfully');

        $this->name = '';
        $this->email = '';
        $this->message = '';

    }

    public function render()
    {
        return view('livewire.app.pages.contact-us-component')->layout('layouts.app');
    }
}
