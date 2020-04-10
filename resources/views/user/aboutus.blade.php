@extends('user/app')

@section('page-title',('About Us'))

<header class="masthead" style="background-image: url({{asset('user/img/'. 'about-bg.jpg' )}})">
@section('head-image',asset('user/img/home-bg.jpg'))

@section('title',"Brut's updates")
@section('sub-heading',"Welcomes You")

@if ( Auth::user()->name=='Shubham Kumar' )
  <form action='{{ route('admins.index') }}' id='wrongAdmin' >
    {{ csrf_field() }}

  </form>


@else

@section('main-container')
  <!-- Main Content -->
  {{-- @php
    $valuess = 'about-bg.jpg';
  @endphp --}}
  {{-- <img src="{{'user/img/'.$valuess}}"> --}}
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>By this project we are basically tryin give latest news updates to our users.</p>
        <p>Based On Laravel platform it gives the clients the update on real world problem.</p>
        <p>To cope up with many platforms we have tried to make it compatible to all the platforms.
          </p>
        <p>Taking many news channels and apps in market we have tried to make it as premium as possible by keeping the latest updates very precised
          </p>
      </div>
    </div>
  </div>

  <hr>
@endsection


@endif
