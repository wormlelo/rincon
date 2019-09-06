<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\message;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
     {        
 // an array of all users that are being followed
        $following = Auth::user()->following->pluck('id');

        $messages = Message::whereIn('user_id', $following)->get();

       //      dd is dump and die
       //      dd($messages);
       //      dd(Auth::user()->following);
       

        return view('home', [
            'messages' => $messages
        ]);
    }
}
