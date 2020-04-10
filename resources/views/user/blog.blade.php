@extends('user/app')



@section('head-image',asset('user/img/home-bg.jpg'))
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
        <div class="col-lg-8 col-md-10 mx-auto">

          @if (!count($postDataObjects)>0)
            @foreach ($postDataObjects as  $data)
              <div class="post-preview">
                <a href="post.html">
                  <h2 class="post-title">
                    {{ $data->title }}
                  </h2>
                  <h3 class="post-subtitle">
                    {{ $data->body }}
                  </h3>
                </a>
                <p class="post-meta">Posted By : {{ $data->posted_by }}
                  on {{ $data->created_at }}</p>
                  <a href="{{ route('blog.home') }}">Read More</a>
              </div>
              <hr>
            @endforeach
          @else
            <h1>Currently no news available !</h1>
          @endif



          <!-- Pager -->
          <div class="clearfix">
            {{-- <ul>
              <li style="list-style:none;text-align:center;"></li>
            </ul> --}}
            {{ $postDataObjects->links() }}
            {{-- < class="btn btn-primary float-right" href="#"> </a> --}}
          </div>
        </div>
      </div>
    </div>

    <hr>
  @endsection


@endif
