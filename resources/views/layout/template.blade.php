<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    @yield('style')

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand " href="#">ICOVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <center>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link text-decoration-none font-weight-bold mr-2 ml-2 @yield('home')" href="{{url('/home')}}">HOME</a>
              <a class="nav-item nav-link font-weight-bold mr-2 ml-2 @yield('info')" href="{{ url('/info ') }}">ICOVID</a>
              <a class="nav-item nav-link font-weight-bold mr-2 ml-2 @yield('hospital')" href="{{url('/hospital')}}">HOSPITAL</a>
              <a class="nav-item nav-link font-weight-bold mr-2 ml-2 @yield('berita')" href="{{url('/berita')}}">BERITA</a>
              <a class="nav-item nav-link font-weight-bold mr-4 ml-2 @yield('about')" href="{{url('/about')}}">ABOUT US</a>
            </div>
          </div>
        </center>
        
      </nav>

      @yield('container')
    
      <script src="{{URL::asset('/assets/bootstrap/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/popper.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/sweetalert2.all.min.js')}}"></script>
      @yield('script')
</body>
</html>