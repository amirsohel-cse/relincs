<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\User;
use App\Models\Media;
use App\Models\Video;
use Livewire\Component;
use App\Models\Following;
use Livewire\WithPagination;

class Findvideo extends Component
{
    use WithPagination;
    public $search;
    public $location;
    public $type;
    public $result;
    public $transmissions;

    // public function mount()
    // {
    //     $this->result;
    // }

    public function render()
    {
        $show_data = Media::orderBy('created_at', 'asc')->take(18)->get();
        $wall_data = Video::latest()->take(3)->get();
        $hubs_data = Hubs::latest()->take(4)->get();
    $result = $this->result;
      return view('livewire.findvideo' , compact('result','show_data','wall_data','hubs_data'))->layout('layouts.guest');
    }

    public function find()
    {

        $this->validate([
            'search' => "required|string|min:3",
            'type' => "required|string",
        ]);

        switch ($this->type) {
            case 'wall':
                $this->result = Video::query()->where('title', 'LIKE', "%{$this->search}%")->orWhere('description', 'LIKE', "%{$this->search}%")->get();
                break;
            case 'media':
                $this->result = Media::query()->where('title', 'LIKE', "%{$this->search}%")->orWhere('description', 'LIKE', "%{$this->search}%")->get();
                break;
            case 'hubs':
                $this->result = Hubs::query()->where('name', 'LIKE', "%{$this->search}%")->get();
                break;
        }
    }

    // public function updatedTransmissions()
    // {
    //   if (!is_array($this->transmissions)) return;

    //   $this->transmissions = array_filter($this->transmissions, function ($transmission) {
    //     return $transmission != false;
    //   });
    // }



}
