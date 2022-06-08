<?php

namespace App\Http\Livewire\Hubs\Media;

use App\Models\Hubs;
use Livewire\Component;
use App\Models\HubMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ListMedia extends Component
{
    use WithPagination;

    public function render()
    {
        $media_hubs = HubMedia::where('user_id',Auth::user()->id)->paginate(5);
        return view('livewire.hubs.media.list-media',compact('media_hubs'))->layout('layouts.app');
    }

    public function delete($id)
    {
        $media =HubMedia::where('id',$id)->first();
        Storage::disk('hubmedia')->deleteDirectory($media->uid);
        $media->delete();
        $this->dispatchBrowserEvent('success_delete');

    }

}
