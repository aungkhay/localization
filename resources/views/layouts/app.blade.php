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

                            @foreach ( config('app.locales') as $locale)

                                @if(session()->get('locale') == $locale)

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                        @switch($locale)
                                            @case('fr')
                                            <img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French
                                            @break
                                            @case('es')
                                            <img src="{{asset('img/es.png')}}" width="30px" height="20x"> Spain
                                            @break
                                            @case('jp')
                                            <img src="{{asset('img/jp.png')}}" width="30px" height="20x"> Japanese
                                            @break
                                            @case('mm')
                                            <img src="{{asset('img/mm.png')}}" width="30px" height="20x"> Myanmar
                                            @break
                                            @default
                                            <img src="{{asset('img/us.png')}}" width="30px" height="20x"> English
                                        @endswitch
                                        
                                    </a>
                                    
                                @endif

                            @endforeach

                            <?php

                                $segment = Request::path();
                                $last_segment = substr($segment, '7');

                            ?>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('lang/en'.$last_segment)}}"><img src="{{asset('img/us.png')}}" width="30px" height="20x"> English</a>
                                <a class="dropdown-item" href="{{url('lang/fr'.$last_segment)}}"><img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French</a>
                                <a class="dropdown-item" href="{{url('lang/es'.$last_segment)}}"><img src="{{asset('img/es.png')}}" width="30px" height="20x"> Spanish</a>
                                <a class="dropdown-item" href="{{url('lang/mm'.$last_segment)}}"><img src="{{asset('img/mm.png')}}" width="30px" height="20x"> Myanmar</a>
                                <a class="dropdown-item" href="{{url('lang/jp'.$last_segment)}}"><img src="{{asset('img/jp.png')}}" width="30px" height="20x"> Japanese</a>
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