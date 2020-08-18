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
        <nav class="navbar navbar-expand-md sticky-top navbar bg-dark text-danger sticky-top">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown " >
                    <a class="nav-link dropdown-toggle" href="{{ url('/admin/create') }}"  style="color:red;" id="navbardrop" data-toggle="dropdown">
                        <span style="color:red; font-size:19px;"> Admin dashboard</span>
                    </a>
                    <div class="dropdown-menu" >
                      <a class="dropdown-item" href="{{ url('/admin/create') }}">
                        <span style="color:red; font-size:17px;"> Product</span>
                         </a>
                        <a class="dropdown-item" href="{{ url('/admin') }}">
                            <span style="color:red; font-size:17px; "> Add product</span></a>
                          
                    </div>
            </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size:17px">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a style="color:red;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:red;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:red;"
                                 href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                    style="display: none; color:red;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
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
