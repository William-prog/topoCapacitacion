<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generalStyle.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1bf0086160.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar-custom">
            <div class="container-menu">
                <div class="header-navigation-menu">
                    <div class="header-icon">
                        <img src="/img/LogoBlanco.png" alt="">
                    </div>
                    <button class="navbar-nav-toggle">
                        <span></span>
                    </button>
                    <div class="navbar-navigation">
                        <ul>
                            @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Iniciar sesión    ') }}<i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">{{ __('Crear cuenta   ') }}<i class="fas fa-user-plus"></i></a>
                            </li>
                            @else

                            @if( Auth::user()->typeUser == 'SuperAdmin')
                            @include('layouts.superAdmin.menu')
                            @endif

                            @if( Auth::user()->typeUser == 'Admin')
                            @include('layouts.admin.menu')
                            @endif

                            @if( Auth::user()->typeUser == 'Capacitador')
                            @include('layouts.capacitador.menu')
                            @endif
 
                            @if( Auth::user()->typeUser == 'Usuario')
                            @include('layouts.usuario.menu')
                            @endif

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                    <span class="title">
                                        {{ __('Cerrar Sesion ') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </span>
                                    <span class="icon"><i class="fas fa-walking"></i></span>
                                </a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>