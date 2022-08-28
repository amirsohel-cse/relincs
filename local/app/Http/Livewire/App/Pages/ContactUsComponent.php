<?php

namespace App\Http\Livewire\App\Pages;

use Livewire\Component;

class ContactUsComponent extends Component
{
    public function render()
    {
        return view('livewire.app.pages.contact-us-component')->layout('layouts.app');
    }
}
