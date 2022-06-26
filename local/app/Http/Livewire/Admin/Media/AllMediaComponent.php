<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;

class AllMediaComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $delete_id;
    
    protected $listeners = ['deleteConfirmed' => 'deleteMedia'];

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function changeStatus($id)
    {
        $data = Media::find($id);
        if($data->status == 1){
            $data->status = 0;
        }
        else{
            $data->status = 1;
        }
        $data->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Media updated successfully']);
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show_media_delete_confirmation');
    }


    public function deleteMedia()
    {
        $wall = Media::find($this->delete_id);
        $wall->delete();
        
        $this->dispatchBrowserEvent('mediaDeleted');
        $this->delete_id = '';
    }


    public function render()
    {
        $medias = Media::where('title', 'like', '%' . $this->searchTerm . '%')->paginate($this->sortingValue);

        return view('livewire.admin.media.all-media-component', ['medias'=>$medias])->layout('livewire.admin.layouts.base');
    }
}
