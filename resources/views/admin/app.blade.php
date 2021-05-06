<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Stillwaters') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/pages.css') }}" rel="stylesheet">


</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <span class="logoFont">STILLWATERS</span>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">

            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('admin.login') }}">Login</a></li>
            <li><a href="{{ route('admin.register') }}">Register</a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{route('admin.dashboard')}}">
                    Profile
                  </a>
                </li>
                <li>
                  <a href="{{route('admin.dashboard')}}">
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>

              </li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>


  <div class="contentView">
    @yield('content')
  </div>


  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12 footerContainer">
          <div class="footerContent">
            <h3 class="footerHead">Get in touch</h3><br>
            <span>47, Lot 3780, Section 218, </span><br>
            <span>KNLD Liang Kee Commercial Centre, </span><br>
            <span>4½ mile Penrissen Road, 93200, </span><br>
            <span>Kuching, Sarawak.</span>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 footerContainer">
          <div class="footerContent">
            <h3 class="footerHead">Opening Hours</h3><br>
            <span>Mon - Fri: 7am - 10pm</span><br>
            <span>Sun: 7am - 3pm</span><br><br>
            <span><i class="fab fa-facebook fa-2x"></i></span>&nbsp;&nbsp;&nbsp;
            <span><i class="fab fa-instagram fa-2x"></i></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 footerContainer">
          <div class="footerContent">
            <h3 class="footerHead">Contact Us</h3><br>
            <span>500 Terry Francois Street</span><br>
            <span>San Francisco, CA 94158</span><br><br>
            <span>Tel: 123-456-7890</span><br>
            <span>info@mysite.com</span><br><br>
            <a href="{{ url('/') }}">
              <span class="logoFont">STILLWATERS</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12">
          <center>
            <span>© 2023 by STILLWATERS. Proudly created with Laravel</span>
          </center>
        </div>
      </div>
    </div>
  </footer>
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- JQuery import -->
<script src="{{ asset('js/jquery.min.js') }}" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.js') }}"></script>

@yield('script')

</body>
</html>
