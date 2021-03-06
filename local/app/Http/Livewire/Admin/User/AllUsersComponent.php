<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\ChFavorite;
use App\Models\ChMessage;
use App\Models\Comment;
use App\Models\CommentMedia;
use App\Models\CommentVideo;
use App\Models\Dislike;
use App\Models\dislike_m;
use App\Models\hubbulletin;
use App\Models\HubMedia;
use App\Models\Hubs;
use App\Models\hubs_wall_dislike;
use App\Models\hubs_wall_like;
use App\Models\hubswallcomment;
use App\Models\HubWall;
use App\Models\Like;
use App\Models\like_m;
use App\Models\MarkWall;
use App\Models\Media;
use App\Models\messages;
use App\Models\profileMarked;
use App\Models\rating;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\userMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllUsersComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $sortingValue, $searchTerm, $delete_id;

    protected $listeners = ['deleteConfirmed' => 'deleteUser'];

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show_user_delete_confirmation');
    }

    public function deleteUser()
    {
        $user = User::find($this->delete_id);

        //ch_favourites
        $chfavs = ChFavorite::where('user_id', $user->id)->get();
        foreach ($chfavs as $chfav) {
            $chfav = ChFavorite::find($chfav->id);
            $chfav->delete();
        }

        //ch_messages
        $chmsgs = ChMessage::where('from_id', $user->id)->orWhere('from_id', $user->id)->get();
        foreach ($chmsgs as $chmsg) {
            $chmsg = ChMessage::find($chmsg->id);
            $chmsg->delete();
        }
        
        //comments
        $comments = Comment::where('user_id', $user->id)->get();
        foreach ($comments as $comment) {
            $comment = Comment::find($comment->id);
            $comment->delete();
        }

        //commentsmedia
        $mediacomments = CommentMedia::where('user_id', $user->id)->get();
        foreach ($mediacomments as $mcomment) {
            $mcomment = CommentMedia::find($mcomment->id);
            $mcomment->delete();
        }

        //commentsvideo
        $videocomments = CommentVideo::where('user_id', $user->id)->get();
        foreach ($videocomments as $vcomment) {
            $vcomment = CommentVideo::find($vcomment->id);
            $vcomment->delete();
        }

        //likes
        $likes = Like::where('user_id', $user->id)->get();
        foreach ($likes as $like) {
            $like = Like::find($like->id);
            $like->delete();
        }
        //dislikes
        $dislikes = Dislike::where('user_id', $user->id)->get();
        foreach ($dislikes as $dislike) {
            $dislike = Dislike::find($dislike->id);
            $dislike->delete();
        }

        //likesMS
        $mslikes = like_m::where('user_id', $user->id)->get();
        foreach ($mslikes as $mlike) {
            $mlike = like_m::find($mlike->id);
            $mlike->delete();
        }
        //dislikesMS
        $msdislikes = dislike_m::where('user_id', $user->id)->get();
        foreach ($msdislikes as $mdislike) {
            $mdislike = dislike_m::find($mdislike->id);
            $mdislike->delete();
        }



        //delete_all_hubs
        $hubs = Hubs::where('user_id', $user->id)->get();
        foreach ($hubs as $h) {
            $hub = Hubs::find($h->id);

            //hub_walls
            $walls = HubWall::where('hubs_id', $hub->id)->get();
            foreach ($walls as $wall) {
                $wall = HubWall::find($wall->id);
                $wall->delete();
            }

            //hub_media
            $medias = HubMedia::where('hubs_id', $hub->id)->get();
            foreach ($medias as $media) {
                $media = HubMedia::find($media->id);
                $media->delete();
            }

            //hub_bulletins
            $bulletins = hubbulletin::where('hubs_id', $hub->id)->get();
            foreach ($bulletins as $bullet) {
                $bullet = hubbulletin::find($bullet->id);
                $bullet->delete();
            }

            $hub->delete();
        }

        //HUBWALLScomments
        $hubwallcomments = hubswallcomment::where('user_id', $user->id)->get();
        foreach ($hubwallcomments as $hubwallcomment) {
            $hubwallcomment = hubswallcomment::find($hubwallcomment->id);
            $hubwallcomment->delete();
        }

        //likes
        $hublikes = hubs_wall_like::where('user_id', $user->id)->get();
        foreach ($hublikes as $hublike) {
            $hublike = hubs_wall_like::find($hublike->id);
            $hublike->delete();
        }
        //dislikes
        $hubdislikes = hubs_wall_dislike::where('user_id', $user->id)->get();
        foreach ($hubdislikes as $hubdislike) {
            $hubdislike = hubs_wall_dislike::find($hubdislike->id);
            $hubdislike->delete();
        }

        //mardwalls
        $markwalls = MarkWall::where('user_id', $user->id)->get();
        foreach ($markwalls as $mwall) {
            $mwall = MarkWall::find($mwall->id);
            $mwall->delete();
        }

        //media
        $allMedia = Media::where('user_id', $user->id)->get();
        foreach ($allMedia as $media) {
            $media = Media::find($media->id);
            $media->delete();
        }

        //Messages
        $allMessages = messages::where('from_id', $user->id)->orWhere('from_id', $user->id)->get();
        foreach ($allMessages as $message) {
            $message = messages::find($message->id);
            $message->delete();
        }

        //MarkedProfiles
        $markedProfiles = profileMarked::where('markkard_id', $user->id)->orWhere('markshod_id', $user->id)->get();
        foreach ($markedProfiles as $mProfile) {
            $mProfile = profileMarked::find($mProfile->id);
            $mProfile->delete();
        }

        //Ratings
        $rattings = rating::where('user_id', $user->id)->get();
        foreach ($rattings as $rating) {
            $rating = rating::find($rating->id);
            $rating->delete();
        }

        //Ratings
        $rattings = rating::where('user_id', $user->id)->get();
        foreach ($rattings as $rating) {
            $rating = rating::find($rating->id);
            $rating->delete();
        }

        //subscribes
        $subscribes = Subscribe::where('follow_id', $user->id)->orWhere('following_id', $user->id)->get();
        foreach ($subscribes as $subscribe) {
            $subscribe = Subscribe::find($subscribe->id);
            $subscribe->delete();
        }

        //walls
        $allWalls = DB::table('wall')->where('user_id', $user->id)->get();
        foreach ($allWalls as $wall) {
            $wall = DB::table('wall')->find($wall->id);
            $wall->delete();
        }

        //userMessages
        $userMessages = userMessage::where('sender_id', $user->id)->orWhere('receiver_id', $user->id)->get();
        foreach ($userMessages as $uMessage) {
            $uMessage = userMessage::find($uMessage->id);
            $uMessage->delete();
        }

        $user->delete();

        $this->dispatchBrowserEvent('userDeleted');
    }

    public $edit_id, $first_name, $last_name, $password, $username, $email, $profile_image, $uploadedImage;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);
    }


    public function editUser($id)
    {
        $this->edit_id = $id;
        $user = User::find($id);
        $this->first_name = $user->firstname;
        $this->last_name = $user->lastname;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->uploadedImage = $user->image_profile;

        $this->dispatchBrowserEvent('showEditModal');
    }

    public function updateUser()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($this->edit_id);
        $user->firstname = $this->first_name;
        $user->lastname = $this->last_name;
        $user->email = $this->email;
        $user->username = $this->username;
        $user->password = Hash::make($this->password);

        if($this->profile_image != ''){
            $imageName = uniqid() . $this->first_name . '.' . $this->profile_image->extension();
            $this->profile_image->storeAs('public/profile_image', $imageName);
            Storage::delete('public/profile_image/' . $user->image_profile);
            
            $user->image_profile = $imageName;
        }

        $user->save();

        $this->dispatchBrowserEvent('success', ['message'=>'User details updated']);
        $this->dispatchBrowserEvent('closeModal');

        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->edit_id = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->username = '';
        $this->profile_image = '';
    }

    public function render()
    {
        $users = User::where('role', 'user')->where(function ($query) {
            $query->where('firstname', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('coutry', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('city', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('gender', 'like', '%' . $this->searchTerm . '%');
        })->paginate($this->sortingValue);

        return view('livewire.admin.user.all-users-component', ['users' => $users])->layout('livewire.admin.layouts.base');
    }
}
