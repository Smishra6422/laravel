@include('admin/template/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin/template/navbar')

  @include('admin/template/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @include('admin/template/header')

    @section('main-content')
      @show()

  </div>
</div>
  <!-- /.content-wrapper -->
  @include('admin/template/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
{{-- </div> --}}
<!-- ./wrapper -->

  @include('admin/template/bottom_scripts')


  
</body>
</html>
