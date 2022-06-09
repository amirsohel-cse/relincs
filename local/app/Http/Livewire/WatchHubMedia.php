<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\Join;
use App\Models\User;
use Livewire\Component;
use App\Models\HubMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WatchHubMedia extends Component
{
    public $media;
    public $user;
    public $hub;
    protected $listeners = ['VideoViewed' => 'countView'];

    public function mount($media)
    {
        $media = HubMedia::where('uid', $media)->first();
        $this->media = $media;
        if($this->media){
        $this->hub = Hubs::where('id', $this->media->hubs_id)->select('id', 'name', 'uid', 'profile')->first();
        // dd($this->hub);
        $this->user = User::find($this->media->user_id);
          
        }else{
            abort(404);
        }
    }

    public function profile_published()
    {
        return asset('storage/profile_image/' . $this->user->image_profile);
    }

    public function render()
    {
        $medias = HubMedia::where('hubs_id', $this->media->hubs_id)->select('id','uid','title','thumbnail_image','created_at','views','views','user_id')->orderBy('views','DESC')->paginate(10);
        return view('livewire.watch-hub-media',compact('medias'))->layout('layouts.guest');
    }

    public function countView()
    {
        $this->media->update([
            'views' => $this->media->views + 1
        ]);
    }

    public function count_joiner($id)
    {
        return Join::where('joining_id', $id)->count();
    }

    public $rstatus = 0;
    public function report()
    {
        // $data['email'] = 'nayeemuzaman05@gmail.com';
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
