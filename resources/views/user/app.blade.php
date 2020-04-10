@include('user/template/head')

</head>

<body>

  @include('user/template/navbar')


  @include('user/template/header')

  @section('main-container')
  @show



  @include('user/template/footer')

  <!-- Bootstrap core JavaScript -->
  <script src={{asset("user/vendor/jquery/jquery.min.js")}}></script>
  <script src={{asset("user/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  <!-- Custom scripts for this template -->
  <script src={{asset("user/js/clean-blog.min.js")}}></script>
  <script src={{asset("user/js/demo.js")}}></script>

</body>

</html>
