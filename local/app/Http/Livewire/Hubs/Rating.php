<?php

namespace App\Http\Livewire\Hubs;

use App\Models\rating as Rate;
use Livewire\Component;

class rating extends Component
{
    public $rating;
    public $currentId;
    public $data;
    public $showSend = false;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
    ];

    public function render()
    {
        $avgStars = Rate::where('hub_id', $this->data->id)->where('status', 1)->with('user')->get();
        // dd($avgStars->avg('rating'));
        return view('livewire.hubs.rating', compact('avgStars'));
    }

    public function mount()
    {
        if (auth()->user()) {

            $rating = Rate::where('user_id', auth()->user()->id)->where('hub_id', $this->data->id)->first();
         
            $showSend = Rate::where('user_id', auth()->user()->id)->where('hub_id', $this->data->id)->exists();
            if (!empty($rating)) {
                $this->showSend = $showSend;
                $this->rating  = $rating->rating;
                $this->currentId = $rating->id;
            }
            // redirect()->route('login');
        }
    }

    public function delete($id)
    {
        $rating = Rate::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
            $this->showSend = false;
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
        }
    }

    public function rate()
    {
        $rating = Rate::where('user_id', auth()->user()->id)->where('hub_id', $this->data->id)->first();
        $this->validate();
        if (!empty($rating)) {
            $rating->user_id = auth()->user()->id;
            $rating->hub_id = $this->data->id;
            $rating->rating = $this->rating;
            $rating->status = 1;
            try {
                $rating->update();
                $this->showSend = true;
                $this->dispatchBrowserEvent("fresh");
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('info', 'Success!');
        } else {
            $rating = new Rate;
            $rating->user_id = auth()->user()->id;
            $rating->hub_id = $this->data->id;
            $rating->rating = $this->rating;
            $rating->status = 1;
            try {
                $rating->save();
                $this->showSend = true;
                $this->dispatchBrowserEvent("fresh");
            } catch (\Throwable $th) {
                throw $th;
            }
            // $this->hideForm = true;
        }
    }
}
