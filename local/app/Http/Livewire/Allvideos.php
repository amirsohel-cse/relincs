<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Allvideos extends Component
{
    use WithPagination;
    protected $listeners = ['delete'];
    public function render()
    {
        $videos = Video::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->paginate(3);

        return view('livewire.allvideos')
            ->with('videos', $videos)
            ->layout('layouts.app');
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete(Video $video)
    {
        if ($video->thumbnail_image == null) {
            $deleted = Storage::delete($video->path);
        } else {
            $deleted = Storage::disk('video')->deleteDirectory($video->uid);
        }
        // if($deleted){
        $video->delete();
        $this->dispatchBrowserEvent('success_delete');
        // }
        // }else{
        //     $this->dispatchBrowserEvent('error_not_file');
        return back();
    }

    public function Freeze(Video $video)
    {
        if ($video->status === 1) {
            $video->update([
                "status" => 0,
            ]);
            $this->dispatchBrowserEvent('unfrezzed');
        } else {

            $video->update([
                "status" => 1,
            ]);
            $this->dispatchBrowserEvent('frezzed');
        }
    }
}
