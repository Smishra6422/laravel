<!-- Navbar -->

@if ( Auth::user()->name=='Shubham Kumar' )

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>

  </ul>

  <!-- SEARCH FORM -->


  <!-- Right navbar links -->

</nav>

@else

  <form action='{{ route('home') }}' id='wrongAdmin' >
    {{ csrf_field() }}

  </form>

@endif
<!-- /.navbar -->
