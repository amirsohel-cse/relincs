<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditMedia extends Component
{
    use WithFileUploads;
    public Media $media;
    public $progress;
    public $cover;

    public function mount($media)
    {
        $this->media = $media;
        $c = $this->media->where('user_id', Auth::user()->id)->get();
        // dd($c);
        if($c === false){
            return redirect()->route('dash.index');
        }
    }

    public function render()
    {
        return view('livewire.edit-media')->layout('layouts.app');
    }

    protected $rules = [
        'media.title' => 'required|string|max:255',
        'media.visibility' => 'required|in:private,public,unslited',
        'media.description' => 'nullable|max:1000',
    ];

    public function update()
    {
        $this->validate();
        // dd($this->media->title);
        $fileName = ''; 
        if($this->cover){
            $fileName = $this->media->uid.'.'.$this->cover->extension();
            Storage::disk('hubmedia')->delete($this->media->uid.'/'.$this->media->thumbnail_image);
            $this->cover->storeAs('media/'.$this->media->uid.'/', $fileName);
        }else{
            $fileName = $this->media->thumbnail_image;
        }

        $this->media->update([
            'title' => $this->media->title,
            'description' => $this->media->description,
            'visibility' => $this->media->visibility,
             'thumbnail_image' => $fileName,
        ]);

        $this->dispatchBrowserEvent('media_updated');
        return redirect()->route('dash.list.media');

    }
}
