<?php

namespace App\Http\Livewire\Admin\Hub;

use App\Models\DisLikeHubMedia;
use App\Models\hubbulletin;
use App\Models\HubMedia;
use App\Models\Hubs;
use App\Models\hubs_wall_dislike;
use App\Models\hubs_wall_like;
use App\Models\hubswallcomment;
use App\Models\HubWall;
use App\Models\LikeHubMedia;
use Livewire\Component;
use Livewire\WithPagination;

class AllHubsComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $delete_id;
    
    protected $listeners = ['deleteConfirmed' => 'deleteHub'];

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function changeStatus($id)
    {
        $data = Hubs::find($id);
        if($data->status == 1){
            $data->status = 0;
        }
        else{
            $data->status = 1;
        }
        $data->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Hub updated successfully']);
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show_hub_delete_confirmation');
    }


    public function deleteHub()
    {
        $wall = Hubs::find($this->delete_id);
        $wall->delete();

        //delete_walls
        $walls = HubWall::where('hubs_id', $this->delete_id)->get();
        foreach($walls as $wall){
            $wall = HubWall::find($wall->id);


            //delete_wallLikes
            $wallLikes = hubs_wall_like::where('video_id', $wall->id)->get();
            foreach($wallLikes as $wallLike){
                $wallLike = hubs_wall_like::find($wallLike->id);
                $wallLike->delete(); 
            }
            //delete_wallDisLikes
            $wallDisLikes = hubs_wall_dislike::where('video_id', $wall->id)->get();
            foreach($wallDisLikes as $wallDisLike){
                $wallDisLike = hubs_wall_dislike::find($wallDisLike->id);
                $wallDisLike->delete(); 
            }
            //delete_wallDisLikes
            $wallComments = hubswallcomment::where('video_id', $wall->id)->get();
            foreach($wallComments as $wallComment){
                $wallComment = hubswallcomment::find($wallComment->id);
                $wallComment->delete(); 
            }


            $wall->delete(); 
        }
        //delete_Media
        $medias = HubMedia::where('hubs_id', $this->delete_id)->get();
        foreach($medias as $media){
            $media = HubMedia::find($media->id);


            //delete_mediaLikes
            $mediaLikes = LikeHubMedia::where('media_id', $media->id)->get();
            foreach($mediaLikes as $mediaLike){
                $mediaLike = LikeHubMedia::find($mediaLike->id);
                $mediaLike->delete(); 
            }

            //delete_mediaDisLikes
            $mediaDisLikes = DisLikeHubMedia::where('media_id', $mediaDis->id)->get();
            foreach($mediaDisLikes as $mediaDisLike){
                $mediaDisLike = DisLikeHubMedia::find($mediaDisLike->id);
                $mediaDisLike->delete(); 
            }


            $media->delete(); 
        }
        //delete_Bulletins
        $bulletins = hubbulletin::where('hubs_id', $this->delete_id)->get();
        foreach($bulletins as $bulletin){
            $bulletin = hubbulletin::find($bulletin->id);
            $bulletin->delete(); 
        }

        $this->dispatchBrowserEvent('hubDeleted');
        $this->delete_id = '';
    }

    public function render()
    {
        $hubs = Hubs::where('name', 'like', '%' . $this->searchTerm . '%')->orWhere('visibility', 'like', '%' . $this->searchTerm . '%')->paginate($this->sortingValue);

        return view('livewire.admin.hub.all-hubs-component', ['hubs'=>$hubs])->layout('livewire.admin.layouts.base');
    }
}
