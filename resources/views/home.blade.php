@extends('user/app')

@section('page-title',('Home Page'))

<header style="height:4.3rem" class="masthead" style="background-image: url(@yield('head-image'))">
{{-- @section('head-image',asset('user/img/home-bg.jpg')) --}}
@section('title','shubham')
@section('sub-heading','hello shubham')

@if ( Auth::user()->name=='Shubham Kumar' )
  <form action='{{ route('admins.index') }}' id='wrongAdmin' >
    {{ csrf_field() }}

  </form>


@else

@section('main-container')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">
        @if (count($postDataObjects)>0)
        @foreach ($postDataObjects as  $data)
          <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto post-preview">
              <a href="/post/home?data={{ $data->id }}">
                <h2 class="post-title">
                  {{ $data->title }}
                </h2>
                <h3 style="overflow-wrap: break-word;" class="post-subtitle">
                  {{ $data->body }} 
                </h3>
              </a>
              <p class="post-meta">Posted By : {{ $data->posted_by }}
                on {{ $data->created_at }}</p>
                <a href="/post/home?data={{ $data->id }}">Read More</a>
            </div>
            <div style="display: flex;
              justify-content: center;
              align-items: center;"
              class="col-lg-4 col-md-4 mx-auto post-preview">
              <img style="position: relative;
                width: 80%;
                height: 80%;
                border-radius: 0.6rem;"
               src="{{ $data->image }}"
               alt="{{ $data->title }}">
            </div>
          </div>

          <hr>
        @endforeach
      @else
        <h1>Currently no news available !</h1>
      @endif


        <!-- Pager -->
        <div class="clearfix">

          {{ $postDataObjects->links() }}

        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection


@endif
