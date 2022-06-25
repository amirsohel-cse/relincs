<?php

namespace App\Http\Livewire\Admin\Hub;

use App\Models\hubs_wall_dislike;
use App\Models\hubs_wall_like;
use App\Models\hubswallcomment;
use App\Models\HubWall;
use Livewire\Component;
use Livewire\WithPagination;

class HubWallsComponent extends Component
{
    use WithPagination;
    public $hub_id, $delete_id, $sortingValue = 10, $searchTerm;
    protected $listeners = ['deleteConfirmed' => 'deleteWall'];

    public function mount($hub_id)
    {
        $this->hub_id = $hub_id;
    }

    public function resetPagination()
    {
        $this->resetPage();
    }
    
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;

        $this->dispatchBrowserEvent('show_wall_delete_confirmation');
    }

    public function deleteWall()
    {
        $wall = HubWall::find($this->delete_id);

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

        $this->dispatchBrowserEvent('wallDeleted');
    }

    public function render()
    {
        $walls = HubWall::where('hubs_id', $this->hub_id)->where('name', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);

        return view('livewire.admin.hub.hub-walls-component', ['walls'=>$walls])->layout('livewire.admin.layouts.base');
    }
}
