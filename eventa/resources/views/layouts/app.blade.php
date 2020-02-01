<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!--Custom Styles -->
    <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/clean-blog.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/jquery-ui.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    
        <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>{{ config('app.name', 'Laravel') }}</span>
                </a>
                <a class="navbar-brand" href="{{ url('/events') }}">
                    <span>{{ __('All Events') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">
                                        {{ __('Dashboard') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
          @include('inc.messages')
            @yield('content')
          
        </main>
    </div>

   <!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-5 mb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="/about">About us</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="/products">Products</a>
          </h6>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="/faq">Help</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="/contact">Contact</a>
          </h6>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->
      <hr class="rgba-white-light" style="margin: 0 15%;">

      <!-- Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
          <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->
      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

      <!-- Grid row-->
      <div class="row pb-3">

        <!-- Grid column -->
        <div class="col-md-12">

          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook fa-lg white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-4"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fa fa-pinterest fa-lg white-text"> </i>
            </a>

          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="www.agitglobaltech.com"> Agit Global Technology Solutions</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>
