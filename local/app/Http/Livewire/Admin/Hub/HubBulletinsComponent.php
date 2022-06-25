<?php

namespace App\Http\Livewire\Admin\Hub;

use App\Models\hubbulletin;
use Livewire\Component;
use Livewire\WithPagination;

class HubBulletinsComponent extends Component
{
    use WithPagination;
    public $hub_id, $delete_id, $sortingValue = 10, $searchTerm;
    protected $listeners = ['deleteConfirmed' => 'deleteBulletins'];

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function mount($hub_id)
    {
        $this->hub_id = $hub_id;
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show_bulletin_delete_confirmation');
    }

    public function deleteBulletins()
    {
        $bulletin = hubbulletin::find($this->delete_id);
        $bulletin->delete();

        $this->dispatchBrowserEvent('bulletinDeleted');
    }

    public function render()
    {
        $bulletins = hubbulletin::where('hubs_id', $this->hub_id)->where('title', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);

        return view('livewire.admin.hub.hub-bulletins-component', ['bulletins'=>$bulletins])->layout('livewire.admin.layouts.base');
    }
}
