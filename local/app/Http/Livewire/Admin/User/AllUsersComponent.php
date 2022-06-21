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
use App\Models\HubWall;
use App\Models\Like;
use App\Models\like_m;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AllUsersComponent extends Component
{
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
        $chmsgs = ChMessage::where('user_id', $user->id)->get();
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

        //subscribes

        $user->delete();

        $this->dispatchBrowserEvent('userDeleted');
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
