<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="icon" href="{{ url('images/logo.ico')}}" type="image/ico" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/custom.css')}}">

        <!-- jQuery -->
        <script src="{{ url('js/jquery-3.3.1.min.js') }} "></script>
    </head>
    <body>
      <!--header -->
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('') }}">Claudia Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::path() ==  '/' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'cv' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('cv') }}">Curriculum Vitae</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'contact' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                </ul>
            </div>
        </nav>


      <!-- content -->
            @yield('content')

      <!-- Footer -->

       <script src="{{ url('js/popper.min.js') }} "></script>
       <script src="{{ url('js/bootstrap.min.js') }} "></script>
       <script src="{{ url('js/custom.js') }} "></script>
    </body>

</html>
