<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class messageUserController extends Controller
{
    public function sendSupportMessage(Request $request)
    {
        $data['send_to'] = 'report@relincs.com';
        // $data['send_to'] = 'nayeemuzaman05@gmail.com';
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['content'] = $request->get('content');

        Mail::send('emails.support', $data, function($message) use ($data) {
            $message->to($data['send_to'])
            ->subject('Support Message');
        });

        // session()->flash('successMessage');
        // return redirect()->back();
        return 'success';
    }
}
