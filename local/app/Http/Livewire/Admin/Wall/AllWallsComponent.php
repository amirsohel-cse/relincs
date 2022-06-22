<?php

namespace App\Http\Livewire\Admin\Wall;

use App\Models\Wall;
use Livewire\Component;
use Livewire\WithPagination;

class AllWallsComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;

    public function resetPagination()
    {
        $this->resetPage();
    }

    public function render()
    {
        $walls = Wall::where('title', 'like', '%' . $this->searchTerm . '%')->orWhere('description', 'like', '%' . $this->searchTerm . '%')->paginate($this->sortingValue);

        return view('livewire.admin.wall.all-walls-component', ['walls'=>$walls])->layout('livewire.admin.layouts.base');
    }
}
