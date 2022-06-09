<?php

namespace App\Http\Livewire;

use App\Models\Hubs;
use App\Models\SettingHub as ModelsSettingHub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SettingHub extends Component
{
    public $hub_id;
    public function mount($hub_id)
    {
        $hub = Hubs::where('uid', $hub_id)->first();
        $this->hub_id = $hub->id;
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'name_hubs' => 'required',
            'username_admin' => 'required',
            'hub_access' => 'required',
            'visiblity' => 'required',
            'link_profile' => 'required',
            'email_contact' => 'required',
        ]);
        
        $getData = ModelsSettingHub::where('user_id', Auth::user()->id)->where('hub_id', $request->get('hubb_id'))->first();

        if($getData != ''){
            $data = $getData;
        }
        else{
            $data = new ModelsSettingHub();
            $data->user_id = Auth::user()->id;
        }
        $data->hub_id = $request->get('hubb_id');
        $data->name_hubs = $request->get('name_hubs');
        $data->username_admin = $request->get('username_admin');
        $data->hub_access = $request->get('hub_access');
        $data->visiblity = $request->get('visiblity');
        $data->link_profile = $request->get('link_profile');
        $data->email_contact = $request->get('email_contact');
        $data->save();

        $hub = Hubs::find($request->get('hubb_id'));
        $hub->visibility = 'private';
        $hub->save();

        session()->flash('successMessage', 'Data updated successfully');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.setting-hub');
    }
}
