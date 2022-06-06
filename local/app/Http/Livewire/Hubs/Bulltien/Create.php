<?php

namespace App\Http\Livewire\Hubs\Bulltien;

use App\Models\hubbulletin;
use App\Models\Hubs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $hubs_id;
    public $data;
    public $title;
    public $link;
    public $description;

    protected $rules=[
        'title' => 'required|string|min:5',
        'link' => 'required|min:5',
        'description' => 'required|min:10|string',
    ];

    public function mount()
    {
        $this->data = Auth::user()->hubs()->select('name', 'id', 'user_id', 'profile')->find($this->hubs_id) ?? abort(404);
    }

    public function render()
    {
        return view('livewire.hubs.bulltien.create');
    }

    public function addbulletin()
    {
        $this->validate();

        Hubs::find($this->data->id)->hubbulletin()->create([
            "user_id" => $this->data->user_id,
            "title" => $this->title,
            "link" => $this->link,
            "description" => $this->description,
        ]);
        $this->dispatchBrowserEvent('b_uploaded');
        return redirect()->route('dash.list.bulletin.hubs');
    }
}
