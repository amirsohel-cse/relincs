<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchEngine extends Component
{
    public $search;
    public $results = [];

    public function render()
    {
        $this->searchengine();
        return view('livewire.search-engine');
    }
    
    public function searchengine()
    {
        if(strlen($this->search) >= 2){
            $query = User::query()->where('username','LIKE', '%'.$this->search.'%');
            $this->results = $query->get();
            // dd($this->results);
        }
    }
}
