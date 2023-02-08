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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app"
        style="min-height: 100vh !important; margin:0 !important; display:flex !important; flex-direction:column !important;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
            style="background-color: #adead2 !important">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    {{ 'Amazing E-Grocery' }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item" style="background-color: #f5da55 !important">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('page.home') }}</a>
                            </li>
                            <li class="nav-item" style="background-color: #f5da55 !important">
                                <a class="nav-link" href="{{ route('cart') }}">{{ __('page.cart') }}</a>
                            </li>
                            <li class="nav-item" style="background-color: #f5da55 !important">
                                <a class="nav-link" href="{{ route('profile') }}">{{ __('page.profile') }}</a>
                            </li>

                            @isAdmin
                                <li class="nav-item" style="background-color: #f5da55 !important">
                                    <a class="nav-link"
                                        href="{{ route('account-maintenance') }}">{{ __('page.account_maintenance') }}</a>
                                </li>
                            @endisAdmin
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="btn-group btn-group-toggle me-4" data-toggle="buttons">
                                <a href="locale/en" class="btn btn btn-light language-switch" data-language="en">EN</a>
                                <a href="locale/id" class="btn btn btn-light language-switch" data-language="id">ID</a>
                            </div>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="background-color: #f5da55 !important">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('form.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="background-color: #f5da55">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('form.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="background-color: #f5da55 !important">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('form.logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 d-flex" style="flex:1 !important">
            @yield('content')
        </main>

        <footer class="footer" style="width: 100%; background-color: #adead2">
            <div class="text-center p-4">
                © Amazing E-Grocery 2023
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
