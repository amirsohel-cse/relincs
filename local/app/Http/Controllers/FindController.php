<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function index()
    {
        return view('pages.find');
    }

    public function search(Request $request)
    {
        dd('saman');
    }
}
