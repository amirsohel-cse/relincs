<?php

namespace App\Http\Livewire\Components;

use App\Models\Hubs;
use App\Models\HubWall;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ToolsWall extends Component
{
    public $video;
    public $all_my_hubs;
    public $steps = false;

    public function mount()
    {
        $this->all_my_hubs = Auth::user()
            ->hubs()
            ->select('user_id', 'name', 'uid', 'profile', 'id')
            ->get();
    }

    public function render()
    {
        return view('livewire.components.tools-wall');
    }

    public function delete(Video $video)
    {
        if ($video->thumbnail_image === NULL && $video->processed_file === NULL) {
            $deleted = Storage::delete($video->path);
        } else {
            $deleted = Storage::disk('video')->deleteDirectory($video->uid);
        }
        if ($deleted) {
            $video->delete();
            $this->dispatchBrowserEvent('success_delete');
        }
        return redirect()->route('dash.list.video');
    }

    public function toggle()
    {
        if ($this->steps) {
            $this->dispatchBrowserEvent('fresh');
        } else {
            $this->steps = true;
        }
    }


  function select($hub)
    {
        $hub = Hubs::find($hub);
        $path=explode('/',$this->video->path);
	    array_splice($path,0,1); // remove element 0 (Word Storage) in Array Path Video Or Image
	    $newPath=implode('/',$path);
	      
        if ($this->checkExistRecord($hub)) {
            $this->dispatchBrowserEvent('Not_dublicate');
        } else {
            $hub->hubwall()->create([
                "user_id" => Auth::user()->id,
                'title' => $this->video->title,
                'description' => $this->video->description,
                'visibility' => $this->video->visibility,
                'uid' => uniqid(true),
                'path' => $newPath,
                'duration' => $this->video->duration,
                'processed' => $this->video->processed,
                'thumbnail_image' => $this->video->thumbnail_image
            ]);
            $this->dispatchBrowserEvent('copy_wall_to_hubs');

            return redirect()->route('dash.list.wall.hubs');
        }
    }

    public function checkExistRecord($hub)
    {
        return HubWall::where('hubs_id', $hub->id)
            ->where('title', $this->video->title)
            ->where('description', $this->video->description)
            ->where('path', $this->video->path)
            ->exists();
    }
}
