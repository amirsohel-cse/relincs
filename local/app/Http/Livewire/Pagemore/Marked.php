<?php

namespace App\Http\Livewire\Pagemore;

use App\Models\Video;
use Livewire\Component;
use App\Models\MarkWall;
use App\Models\profileMarked;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Marked extends Component
{
    use WithPagination;

    public $united;
    public $profile;
    public function mount()
    {
        $marks=MarkWall::where('user_id' , auth()->id())->get();
        $profile=profileMarked::where('markkard_id' , Auth::user()->id)->get();
        $this->united =$marks;
        $this->profile =$profile;
    }

    public function show_video($id)
    {
        return Video::find($id);
    }

    public function count_like($wall)
    {
        return $wall->Likes()->count();
    }

    public function count_comments($wall)
    {
        return $wall->Comments()->count();
    }

    public function render()
    {
        return view('livewire.pagemore.marked')->layout('layouts.app');
    }
}
