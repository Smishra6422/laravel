<?php

namespace App\Http\Controllers;

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
        $postDataObjects = new \App\Post;
        $postDataObjects = $postDataObjects::paginate(10);
        return view('home',compact('postDataObjects'));

        // return view('home');
        // $postDataObjects = new \App\Post;
        // $postDataObjects = $postDataObjects::paginate(1);
        // return $postDataObjects;
        // return view('user/blog',compact('postDataObjects'));
    }
}
