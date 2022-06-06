<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Markwall as Mark;
use Illuminate\Support\Facades\Auth;

class Markwall extends Component
{

    public $video;
    public $marks;
    public $marked;


    public function mount(Video $video)
    {
        $this->video = $video;
        $this->checkIfmarkd();
    }

    public function checkIfmarkd()
    {
        $this->video->doesUsermarkedVideo() ? $this->marked = true : $this->marked = false;
    }

    public function render()
    {
        return view('livewire.markwall');
    }

    public function mark()
    {
        if (Auth::check()) {
            if ($this->video->doesUsermarkedVideo()) {
                Mark::where('user_id', auth()->id())->where('video_id', $this->video->id)
                    ->delete();
                $this->marked = false;
            } else {
                $this->video->marks()->create([
                    'user_id' => auth()->id(),
                ]);
                // $this->disablemark();
                $this->marked = true;
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function disablemark()
    {
        Mark::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
        $this->marked = false;
    }
}
