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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('img/' . session()->get('locale') . '.png') }}" width="30px" height="20x">
                                {{ strtoupper(session()->get('locale')) }}
                            </a>

                            @php
                                $last_segment = substr(Request::path(), '2');
                            @endphp

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('en' . $last_segment) }}">
                                    <img src="{{ asset('img/en.png') }}" width="30px" height="20x"> English
                                </a>
                                <a class="dropdown-item" href="{{ url('fr' . $last_segment) }}">
                                    <img src="{{ asset('img/fr.png') }}" width="30px" height="20x"> French
                                </a>
                                <a class="dropdown-item" href="{{ url('es' . $last_segment) }}">
                                    <img src="{{ asset('img/es.png') }}" width="30px" height="20x"> Spanish
                                </a>
                                <a class="dropdown-item" href="{{ url('jp' . $last_segment) }}">
                                    <img src="{{ asset('img/jp.png') }}" width="30px" height="20x"> Japanese
                                </a>
                                <a class="dropdown-item" href="{{ url('mm' . $last_segment) }}">
                                    <img src="{{ asset('img/mm.png') }}" width="30px" height="20x"> Myanmar
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">

            @yield('content')

        </main>
    </div>
</body>
</html>