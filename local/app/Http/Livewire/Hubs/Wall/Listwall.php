<?php

namespace App\Http\Livewire\Hubs\Wall;

use App\Models\HubWall;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Listwall extends Component
{
    use WithPagination;

    public function render()
    {
         $media_hubs =HubWall::where('user_id',Auth::user()->id)->paginate(3);
        return view('livewire.hubs.wall.listwall',compact('media_hubs'))->layout('layouts.app');
    }

    public function delete($id)
    {
        // dd($id);
        $media =HubWall::where('id',$id)->first();
        Storage::disk('hubmedia')->deleteDirectory($media->uid);
        $media->delete();
        $this->dispatchBrowserEvent('success_delete');

    }

}
