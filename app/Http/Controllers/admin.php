<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $postDataObjects = new \App\Post;
        $postDataObjects = $postDataObjects::all();
        return view('admin/home',compact('postDataObjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title' => 'required',
          'slug' => 'required',
          'image' => 'required',
          'posted_by' => 'required',
          'body' => 'required'
        ]);

        $postDataObjects = new \App\Post;

        $postDataObjects->title = $request->title;
        $postDataObjects->slug = $request->slug;
        $postDataObjects->image = $request->image;
        $postDataObjects->posted_by = $request->posted_by;
        $postDataObjects->body = strip_tags($request->body);
        $postDataObjects->save();

        return redirect(route('admins.index'));
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postDataObjects = new \App\Post;
        $postDataObjects = $postDataObjects::where('id',$id)->first();
        // return $postDataObjects;
        return view('admin/edit_post',compact('postDataObjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'title' => 'required',
        'slug' => 'required',
        'image' => 'required',
        'posted_by' => 'required',
        'body' => 'required'
      ]);

      $postDataObjects = new \App\Post;
      $postDataObjects = $postDataObjects::find($id);

      $postDataObjects->title = $request->title;
      $postDataObjects->slug = $request->slug;
      $postDataObjects->image = $request->image;
      $postDataObjects->posted_by = $request->posted_by;
      $postDataObjects->body = strip_tags($request->body);
      $postDataObjects->save();

      return redirect(route('admins.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $postDataObjects = new \App\Post;
        $postDataObjects::where('id',$id)->delete();
        return redirect(route('admins.index'));
    }
}
