<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|min:4',
            'lname' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
            'image_profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dob' => 'required|string',
            // 'country' => 'string',
            'gender' => 'required|string',
            'accepted' => 'required',
            'password' => 'required|confirmed|min:6',
            // 'g-recaptcha-response' => 'required',
        ]);
        if($request->hasFile('image_profile')){
            $imageName = time().$request->fname.'.'.$request->image_profile->extension();  
            $request->image_profile->move(public_path('storage/profile_image'), $imageName);
        }else{
            $imageName = "null";
        }

        $user=User::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'email' => $request->email,
            'image_profile' => $imageName,
            'username' => $request->fname.$request->lname,
            'data_birth' => $request->dob,
            'coutry' => $request->country,
            'city' => $request->city,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);
        // event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

}
