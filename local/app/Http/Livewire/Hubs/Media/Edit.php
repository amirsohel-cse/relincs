<?php

namespace App\Http\Livewire\Hubs\Media;

use Livewire\Component;
use App\Models\HubMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $hubmedia;
    public $cover;
    public $progress;

    public function mount($hubmedia)
    {
        $hubmedia = HubMedia::where('uid',$this->hubmedia)->first();
        $this->hubmedia = $hubmedia;

        $c = $this->hubmedia->where('id', $this->hubmedia)->get();
        if($c === false){
            return redirect()->route('dash.index');
        }
    }

    public function render()
    {
        return view('livewire.hubs.media.edit')->layout('layouts.app');
    }

    protected $rules = [
        'hubmedia.title' => 'required|string|max:255',
        'hubmedia.visibility' => 'required|in:private,public,unslited',
        'hubmedia.description' => 'nullable|max:1000',
        'cover' => 'image|mimes:png,jpg',
    ];

    public function update()
    {
        $this->validate();
        // dd($this->hubmedia->title);

        // $cover = $this->cover ? $fileName : $this->hubmedia->thumbnail_image; 
        $fileName = ''; 
        if($this->cover){
            $fileName = $this->hubmedia->uid.'.'.$this->cover->extension();
            Storage::disk('hubmedia')->delete($this->hubmedia->uid.'/'.$this->hubmedia->thumbnail_image);
            $this->cover->storeAs('hubs/media/'.$this->hubmedia->uid.'/', $fileName);
        }else{
            $fileName = $this->hubmedia->thumbnail_image;
        }

        $this->hubmedia->update([
            'title' => $this->hubmedia->title,
            'description' => $this->hubmedia->description,
            'visibility' => $this->hubmedia->visibility,
            'thumbnail_image' => $fileName,
        ]);

        $this->dispatchBrowserEvent('media_updated');

        return redirect()->route('dash.list.media.hubs');
    }
}
