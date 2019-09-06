<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Message;


class ProfileController extends Controller
{
    // $user is defined in the web.php file
    public function index($user) {

        $user = User::findOrFail($user);
       $messages = Message::where('user_id', $user->id)->get();

        return view('profile', [
            'user' => $user,
           'messages' => $messages
        ]);
    }
}
