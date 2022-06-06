<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class directoxontroller extends Controller
{
    public function index()
    {
        $users = User::where('id','!=',Auth::user()->id)->get();
        return view('directbox',compact('users'));
    }
}
