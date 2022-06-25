<?php

namespace App\Http\Livewire\Admin\Wall;

use App\Models\Like;
use App\Models\Wall;
use Livewire\Component;
use Livewire\WithPagination;

class AllWallsComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $delete_id;
    
    protected $listeners = ['deleteConfirmed' => 'deleteWall'];

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function changeStatus($id)
    {
        $data = Wall::find($id);
        if($data->status == 1){
            $data->status = 0;
        }
        else{
            $data->status = 1;
        }
        $data->save();

        $this->dispatchBrowserEvent('success', ['message'=>'Wall updated successfully']);
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show_wall_delete_confirmation');
    }


    public function deleteWall()
    {
        $wall = Wall::find($this->delete_id);
        $wall->delete();

        //delete_likes
        $likes = Like::where('video_id', $this->delete_id)->get();
        foreach($likes as $like){
            $like = Like::find($like->id);
            $like->delete(); 
        }

        $this->dispatchBrowserEvent('wallDeleted');
        $this->delete_id = '';
    }


    public function render()
    {
        $walls = Wall::where('title', 'like', '%' . $this->searchTerm . '%')->orWhere('description', 'like', '%' . $this->searchTerm . '%')->paginate($this->sortingValue);

        return view('livewire.admin.wall.all-walls-component', ['walls'=>$walls])->layout('livewire.admin.layouts.base');
    }
}
