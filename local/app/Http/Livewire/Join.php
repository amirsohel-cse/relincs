<?php

namespace App\Http\Livewire;

use App\Models\Join as ModelsJoin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Join extends Component
{
    public $color = 'indigo';
    public $user_id;
    public $uid;
    public $joining;

    protected $listeners=['rr' , '$refresh'];

    public function mount(ModelsJoin $joining)
    {
        $this->joining = $joining;
        if (Auth::check()) {
            $this->check_is_another_user();
            $this->check_is_join();
        }
    }

    public function render()
    {
        return view('livewire.join');
    }

    public function check_is_another_user()
    {
        return $this->user_id !== auth()->user()->id;
    }

    public function check_is_join()
    {
        return ModelsJoin::where('join_id', auth()->id())->where('joining_id', $this->user_id)->exists();
    }


    public function joining()
    {
        ModelsJoin::create([
            'join_id' => auth()->user()->id,
            'joining_id' => $this->user_id,
        ]);
        $this->dispatchBrowserEvent("fresh");
    }

    public function Unjoin()
    {
        ModelsJoin::where('join_id', auth()->id())->where('joining_id', $this->user_id)->delete();

        $this->dispatchBrowserEvent("fresh");
    }

    public function redirectToEditProfile()
    {
        return redirect()->route('dash.list.hubs');
    }
}
