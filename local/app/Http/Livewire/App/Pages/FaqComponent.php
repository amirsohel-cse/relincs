<?php

namespace App\Http\Livewire\App\Pages;

use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        return view('livewire.app.pages.faq-component')->layout('layouts.app');
    }
}
