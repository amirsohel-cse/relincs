<?php

namespace App\Http\Controllers\hubs;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class createController extends Controller
{
    public function index()
    {
        return view('hubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "profileHubs" => 'required|max:2024|mimes:png,jpg',
            "name" => 'required|string|max:155',
            "about" => 'required|string|min:10',
        ]);

        $imageName = $request->name . '_' . time() . '_' . rand() . '.' . $request->profileHubs->extension();
        $request->profileHubs->move(public_path('storage/profile_hubs'), $imageName);

        Auth::user()->hubs()->create([
            "profile" => $imageName,
            "name" => $this->name,
            "about" => $this->about,
        ]);

        User::find(Auth::user()->id)->update([
            'hubs' => Auth::user()->hubs === null ? 1 :  Auth::user()->hubs + 1,
        ]);

        return redirect('/list-hubs')->with('success','done successfully');
    }
}
