<?php

namespace App\Http\Livewire\Hubs\Wall;

use App\Models\HubWall;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public $hubmedia;
    public $data;
    public $visibilityd;
    public $title;
    public $visibility;
    public $description;

    public function mount()
    {
        $this->data = HubWall::select('path', 'title', 'user_id', 'hubs_id', 'id', 'description', 'uid', 'created_at', 'visibility')
        ->where('uid',$this->hubmedia)->first();
        // dd($this->data);
        $this->title = $this->data->title;
        $this->description = $this->data->description;
        $this->visibilityd = $this->data->visibility;
        $this->visibility = $this->data->visibility;
        // dd($this->data);
        // $hubmedia = HubWall::where('uid', $this->data)->first();
        // $this->data = $hubmedia;

        // $c = $this->data->where('uid', $this->data)->get();
        // if ($c === false) {
        //     return redirect()->route('dash.index');
        // }
    }

    public function render()
    {
        return view('livewire.hubs.wall.edit')->layout('layouts.app');
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'visibility' => 'required|in:private,public,unslited',
        'description' => 'nullable|max:1000',
    ];

    public function update()
    {
        $this->validate();
        $pre_title = $this->data->title;

        $this->data->update([
            'title' => $this->title,
            'description' => $this->description,
            'visibility' => $this->visibility,
        ]);

        $this->dispatchBrowserEvent('wallEdit_uploaded');
        return redirect()->route('dash.list.wall.hubs');
    }
}
