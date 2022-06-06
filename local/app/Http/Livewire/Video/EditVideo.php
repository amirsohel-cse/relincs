<?php

namespace App\Http\Livewire\Video;

use App\Models\User;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EditVideo extends Component
{

    public Video $video;
    public $progress;

    public function mount($video)
    {
        $this->video = $video;
        $c = $this->video->where('user_id', Auth::user()->id)->get();
        // dd($c);
        if($c === false){
            return redirect()->route('dash.index');
        }
    }

    public function render()
    {
        return view('livewire.video.edit-video')->layout('layouts.app');
    }

    protected $rules = [
        'video.title' => 'required|string|max:255',
        'video.visibility' => 'required|in:private,public,unslited',
        'video.description' => 'nullable|max:1000',
    ];

    public function update()
    {
        $this->validate();
        $pre_title=$this->video->title;

        $this->video->update([
            'title' => $this->video->title,
            'description' => $this->video->description,
            'visibility' => $this->video->visibility,
        ]);

        return redirect()->route('dash.list.video')->with('success','Wall Edited '.$pre_title);

    }
}
