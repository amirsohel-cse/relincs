<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authAdmin extends Controller
{
    public function create()
    {
        return view('auth.loginadmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:admins,username',
            'password' => 'required|min:4',
        ]);

        $cards = $request->only('username', 'password');

        if (Auth::guard('web')->attempt($cards)) {
            return redirect()->route('admin.dashbord');
        } else {
            return redirect()->route('loginadmin');
        }
    }
}
