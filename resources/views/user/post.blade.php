@extends('user/app')

@section('page-title')
  News : {{ $postDataObjects[0]->title }}

@endsection

<header style="height:4.5rem" class="masthead" style="background-image: url(@yield('head-image'))">
{{-- @section('head-image',asset('user/img/post-bg.jpg')) --}}
@section('title','shahid')
@section('sub-heading','hello shahid')

@section('main-container')

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


          <h2 class="section-heading">{{ $postDataObjects[0]->title }}</h2>
          <img style="position: relative;
            width: 100%;
            margin: 2rem 0;
            border-radius: 1rem;
            height: 25rem;"
            class="img-fluid"
            src="{{ $postDataObjects[0]->image }}"
            alt="{{ $postDataObjects[0]->title }}">

          <p>{{ $postDataObjects[0]->body }}
            As I stand out here in the wonders of the unknown at Hadley, I sort of
              realize there’s a fundamental truth to our nature, Man must explore, and
               this is exploration at its greatest.
          </p>


          <h2 class="section-heading">Posted By : {{ $postDataObjects[0]->posted_by }}</h2>

          <p>Postend On : {{ $postDataObjects[0]->created_at }}</p>

        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection
