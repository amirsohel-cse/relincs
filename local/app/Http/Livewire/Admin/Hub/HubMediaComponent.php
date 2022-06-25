<?php

namespace App\Http\Livewire\Admin\Hub;

use App\Models\DisLikeHubMedia;
use App\Models\HubMedia;
use App\Models\LikeHubMedia;
use Livewire\Component;
use Livewire\WithPagination;

class HubMediaComponent extends Component
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

        $this->dispatchBrowserEvent('show_media_delete_confirmation');
    }

    public function deleteWall()
    {
        $media = HubMedia::find($this->delete_id);

        //delete_mediaLikes
        $mediaLikes = LikeHubMedia::where('media_id', $media->id)->get();
        foreach($mediaLikes as $mediaLike){
            $mediaLike = LikeHubMedia::find($mediaLike->id);
            $mediaLike->delete(); 
        }

        //delete_mediaDisLikes
        $mediaDisLikes = DisLikeHubMedia::where('media_id', $media->id)->get();
        foreach($mediaDisLikes as $mediaDisLike){
            $mediaDisLike = DisLikeHubMedia::find($mediaDisLike->id);
            $mediaDisLike->delete(); 
        }

        $media->delete();

        $this->dispatchBrowserEvent('mediaDeleted');
    }

    public function render()
    {
        $medias = HubMedia::where('hubs_id', $this->hub_id)->where('title', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);

        return view('livewire.admin.hub.hub-media-component', ['medias'=>$medias])->layout('livewire.admin.layouts.base');
    }
}
