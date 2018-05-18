<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-image: url('/uploads/logos/transparent.png'), url('/uploads/backgrounds/orange_back.png')">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/uploads/logos/top_logo.png" alt="top_logo">
                </a>
                <img src="/uploads/figures/pipe.png" alt="pipe" height="46px" class="d-none d-sm-none d-md-block">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="dropdown show" style=" margin-right: 5px">
                            <a style="display: inline-block; padding-left: 10px; padding-right: 2px; background: none; border: none;" class="nav-link text-white hover_gray btn btn-secondary dropdown-toggle" href="#" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('КИЕВ') }}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">CITY 1</a>
                                <a class="dropdown-item" href="#">CITY 2</a>
                                <a class="dropdown-item" href="#">CITY 3</a>
                            </div>
                        </div>
                        <div class="text-white">
                            <img src="/uploads/figures/phone.png" alt="phone" width="30px" style="margin-right: 10px">(044) 389 30 28
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('МЕНЮ') }}</a></li>
                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('ПОЧЕМУ ЭТО ТАК УДОБНО?') }}</a></li>
                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('ОТЗЫВЫ') }}</a></li>
                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('ВОПРОСЫ') }}</a></li>
                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('ЗАКАЗАТЬ') }}</a></li>
                        <li><a class="nav-link text-white hover_gray" href="#">{{ __('БЛОГ') }}</a></li>
                        @guest
                            <li><a class="nav-link text-white hover_gray" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link text-white hover_gray" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('yellow')
            @yield('content')
        </main>
    </div>
</body>
</html>
