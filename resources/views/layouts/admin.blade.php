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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="admin">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="sidebar col-md-3 py-5">
                <ul class="list-group">
                    <li class="list-group-item {{ (\Request::is('admin') ? 'active' : '') }}"><a href="{{route('admin.index')}}">Главная</a></li>
                    <li class="list-group-item {{ (\Request::is('admin/user') ? 'active' : '') }}"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                    <li class="list-group-item sub-item {{ (\Request::is('admin/user/create') ? 'active' : '') }}"><a href="{{route('admin.user.create')}}">Добавить пользователя</a></li>
                    <li class="list-group-item {{ (\Request::is('admin/menu') ? 'active' : '') }}"><a href="{{route('admin.menu.index')}}">Меню</a></li>
                    <li class="list-group-item sub-item {{ (\Request::is('admin/menu/create') ? 'active' : '') }}"><a href="{{route('admin.menu.create')}}">Добавить меню</a></li>
                    <li class="list-group-item {{ (\Request::is('admin/meal') ? 'active' : '') }}"><a href="{{route('admin.meal.index')}}">Блюда</a></li>
                    <li class="list-group-item"><a href="">Заказы</a></li>
                    <li class="list-group-item"><a href="">Бонусы</a></li>
                </ul>
            </nav>

            <div id="content" class="col-md-9 py-5">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>