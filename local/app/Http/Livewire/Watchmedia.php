<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Media;
use Livewire\Component;
use App\Models\Following;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Watchmedia extends Component
{
    public $media;
    public $share = false;
    public $user;
    protected $listeners = ['VideoViewed' => 'countView'];

    public function mount(Media $media)
    {
        // dd(Auth::user());

        $this->media = $media;
        $this->user = User::find($this->media->user_id);
    }

    public function profile_published()
    {
        return asset('storage/storage/profile_image/' . $this->user->image_profile);
    }

    public function render()
    {
        return view('livewire.watchmedia')->layout('layouts.guest');
    }

    public function countView()
    {
        $this->media->update([
            'views' => $this->media->views + 1
        ]);
    }

    public function count_subscribe()
    {
        return Subscribe::where('following_id', $this->media->user_id)->count();
    }

    public function share()
    {
        $this->share = !$this->share;
    }

    public $rstatus = 0;
    public function report()
    {
        $data['email'] = 'report@relincs.com';
        $data['title'] = 'video report';
        $data['body'] = Auth::user()->firstname.' '.Auth::user()->lastname.' wants to report this file - '.$this->media->title;

        Mail::send('emails.report-video', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject('Video Report');
        });

        $this->rstatus = 1;
        $this->dispatchBrowserEvent('success', 'Reported successfully');
    }
}
