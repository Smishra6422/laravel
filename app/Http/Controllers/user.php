<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    function renderPost () {

      return view('auth/login');
    }

    function renderPostDetail (Request $id) {

      $postDataObjects = new \App\Post;
      $postDataObjects = $postDataObjects::find($id);
      // return $postDataObjects;
      return view('user/post',compact('postDataObjects'));

    }
    function renderAboutUs () {

      // $postDataObjects = new \App\Post;
      // $postDataObjects = $postDataObjects::find($id);
      // return $postDataObjects;
      return view('user/aboutus');

    }
}
