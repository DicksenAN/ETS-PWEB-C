<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Reply;
use App\User;
use Illuminate\Http\Request;

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
        $threads = Thread::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->paginate(3);
        $replies = Reply::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->paginate(3);
        // dd($threads);
        return view('home')->with('threads', $threads)->with('replies', $replies);
    }
}
