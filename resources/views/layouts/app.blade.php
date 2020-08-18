<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cephas') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-container" style="position: relative;
    min-height: 100vh;">
        <div id="app">
        <nav class="navbar navbar-expand-md sticky-top navbar bg-dark text-danger sticky-top navbar-dark">
            <div class="container">
                <div class="">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div>
                    <img src="/image/logo.jpg " width="40px" height="40px">
                   <span style="color:red; font-size:20px; font-weight:bold;"> Cephas Group</span>
                    </div>
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size:17px">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a style="color:red;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:red;"
                                    class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                 style="color:red;"role="button" data-toggle="dropdown" aria-haspopup="true" 
                                 aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:red;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ url('/cart') }}">Cart 
                                <img src="/image/cart.jpg " width="15px" height="15px">
                                <span> 
                                    {{Cart::count()}} 
                        
                                </span>
                            </a> 
                          </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div id="content-wrap" style="padding-bottom: 2.5rem;">
            @yield('content')
            </div>
        </main>
        </div>
    </div>
</body>
</html>
