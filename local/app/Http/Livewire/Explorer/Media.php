<?php

namespace App\Http\Livewire\Explorer;

use App\Models\Media as ModelsMedia;
use Livewire\Component;

class Media extends Component
{
    public function render()
    {
        $allMedia=ModelsMedia::latest()->paginate(12);
        dd($allMedia);
        return view('livewire.explorer.media',compact('allMedia'));
    }
}
