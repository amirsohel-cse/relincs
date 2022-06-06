<?php

namespace App\Http\Livewire\Hubs\Components;

use Livewire\Component;

class CardHub extends Component
{
    public $data;

    public function mount($data){
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.hubs.components.card-hub');
    }
}
