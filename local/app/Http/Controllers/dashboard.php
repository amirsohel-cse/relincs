<?php

namespace App\Http\Controllers;

use App\Models\Following;
use App\Models\Like;
use App\Models\Media;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    public function index()
    {
        if (Auth::user()->email != "admin@gmail.com") {
            if (Auth::user()->email_verified_at === null) {
                return redirect()->route("verification.notice");
            }
        }

        $counts = $this->counts();
        
        $users = User::query()->latest()->paginate(14);
        return view('dashboard.index', compact('counts', 'users'));
    } 
    public function counts()
    {
        return [
            'users' => User::count(),
            'wall' => Video::count(),
            'media' => Media::count(),
            'like' => Like::count(),
        ];
    }
}
