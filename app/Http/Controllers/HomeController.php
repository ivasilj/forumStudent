<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\User;

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
        $latestThreads = Thread::latest()->limit(3)->with('author')->get();
        $popularThreads = Thread::withCount('comments')->limit(3)->orderBy('comments_count', 'desc')->get();
        $newUsers = User::latest()->limit(3)->get();
        return view('home', ['latestThreads' => $latestThreads, 'popularThreads' => $popularThreads, 'newUsers' => $newUsers]);
    }
}
