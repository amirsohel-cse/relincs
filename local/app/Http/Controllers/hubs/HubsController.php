<?php

namespace App\Http\Controllers\hubs;

use App\Models\User;
use App\Models\Hubs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\hubbulletin;
use App\Models\HubMedia;
use App\Models\HubWall;
use App\Models\Join;
use App\Models\rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class HubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_hubs = Auth::user()->hubs()->paginate(6);
        return view('hubs.create' , compact('my_hubs'));
    }

    public function display()
    {
        return view('pages.hubs_another');
    }

    public function list_hubs()
    {
        $my_hubs = Auth::user()->hubs()->paginate(6);
        return view('hubs.listHubs', compact('my_hubs'));
    }

    public function list_media()
    {
        $media_hubs = HubMedia::where('user_id', Auth::user()->id)->paginate(7);
        // dd($media_hubs);
        return view('hubs.list_media', compact('media_hubs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            "profileHubs" => 'required|max:2024',
            "name" => 'required|string|max:155|unique:hubs,name',
            "about" => 'required|string|min:10',
        ]);

        $imageName = time() . $request->name . '.' . $request->profileHubs->extension();
        $request->profileHubs->storeAs('/public/profile_hubs', $imageName);

        Auth::user()->hubs()->create([
            "profile" => $imageName,
            "name" => $request->name,
            "about" => $request->about,
            "uid" => uniqid(true),
        ]);

        User::find(Auth::user()->id)->update([
            'hubs' => Auth::user()->hubs === null ? 1 :  Auth::user()->hubs + 1,
        ]);

        return redirect()->route('dash.list.hubs')->with('success', 'done successfully');
    }

    public function show($uid)
    {
        $data = Hubs::where('uid', $uid)->first();
        if ($data === null) {
            abort(Response::HTTP_FORBIDDEN);
        }
        // dd(Auth::user()->id);
        $checkJoinUser = Join::where('join_id', Auth::user()->id)->orWhere('joining_id' , $data->id)->exists();
        // dd($checkJoinUser , Auth::user()->id , $data->id);
        $checkJoinAUser = Hubs::where('user_id', Auth::user()->id)->exists();
        $count_joiner = $this->count_joiner($data->user_id);
        $count_joining = $this->count_joining($data->user_id);
        $data_media=(new Hubs)->hubmedia()->where('hubs_id',$data->id)->get();
        $data_mediaa= HubMedia::where('hubs_id',$data->id)->orderBy('created_at', 'DESC')->paginate(10);
        $trending= HubMedia::where('hubs_id',$data->id)->where('views','>',10)->latest()->paginate(10);
        $latest_wall= HubWall::where('hubs_id',$data->id)->latest()->paginate(10);
        $latest_bulletin= hubbulletin::where('hubs_id',$data->id)->latest()->paginate(10);
        // dd($rates);
        // dd($checkJoinAUser);
        return view('hubs.show', compact('data','trending','latest_bulletin','latest_wall','data_media','data_mediaa','checkJoinUser', 'checkJoinAUser', 'count_joiner', 'count_joining'));
    }

    public function edit($uid)
    {
        $data = Hubs::where('uid', $uid)->first();
        if ($data === null) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('hubs.edit', compact('data'));
    }

    public function update(Request $request, $uid)
    {
        $get = Hubs::where('uid', $uid)->first();
        $request->validate([
            "profileHubs" => 'max:2024',
            "name" => 'required|string|max:155|unique:hubs,name',
            "about" => 'required|string|min:10',
        ]);

        if ($request->hasfile('profileHubs')) {
            $imageName = 'edit' . time() . $request->name . '.' . $request->profileHubs->extension();
            $request->profileHubs->storeAs('public/profile_hubs', $imageName);;
        }

        $get->name = $request->name;
        $get->about = $request->about;
        $get->profile = $imageName;
        $get->save();

        // Hubs::update([
        //     "profile" => $get->profile === null ? $imageName : $get->profile,
        //     "name" => $request->name,
        //     "about" => $request->about,
        //     // "uid" => uniqid(true),
        // ]);

        // User::find(Auth::user()->id)->update([
        //     'hubs' => Auth::user()->hubs === null ? 1 :  Auth::user()->hubs + 1,
        // ]);

        return redirect()->route('dash.list.hubs')->with('success', 'Hub Edited');
    }

    public function destroy($uid)
    {
        $destroy = Auth::user()->hubs()->find($uid);
        $hub_name = $destroy->name;
        $deleteProfile = Storage::delete('public/profile_hubs/' . $destroy->profile);
        if ($destroy->delete() && $deleteProfile) {
            User::find(Auth::user()->id)->update([
                'hubs' => Auth::user()->hubs === 1 ? Null : Auth::user()->hubs - 1,
            ]);
        }
        return redirect()->back()->with('delete', 'Delete Hub ' . $hub_name . '❌');
    }

    public function destroy_media($id)
    {
        $destroy = HubMedia::where('id',$id)->first();
        $hub_name = $destroy->title;
        $result = Storage::delete('hubs/media/'.$destroy->uid);
        if($result){
            return redirect()->back()->with('delete', 'Delete Media Hub ' . $hub_name . '❌');
        }
    }

    public function count_joiner($id)
    {
        return Join::where('joining_id', $id)->count();
    }

    public function count_joining($id)
    {
        return Join::where('join_id', $id)->count();
    }
}
