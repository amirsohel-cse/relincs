<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Allmedia extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.allmedia')
            ->with('medias', Auth::user()->medias()->latest()->paginate(3))
            ->layout('layouts.app');
    }

    public function delete(Media $Media)
    {
        $deleted = Storage::disk('media')->deleteDirectory($Media->uid);

        $Media->delete();
        $this->dispatchBrowserEvent('success_delete');
        return back();
    }
}
