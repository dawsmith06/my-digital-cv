<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="Darwin Smith Rosso Ramirez">
        <meta property="og:title" content="Darwin Smith Rosso Ramirez" />
        <meta property="og:description" content="Digital Curriculum Vitae" />
        <meta property="og:image" itemprop="image" content="{{asset('img/resize-cover-min.png')}}">
        <meta property="og:type" content="article" />
        <meta property="og:updated_time" content="1440432930" />
        <meta property="og:url" content="{{url('/vue')}}" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Digital Curriculum Vitae</title>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/main-css/boostrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main-css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main-css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main-css/theme.css') }}" rel="stylesheet">
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

       
    </head>

    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
    </body>

    {{-- <script src="{{ asset('js/main-js/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main-js/boostrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main-js/fingerprint.min.js') }}"></script> --}}
    <script src="{{ asset('js/main-js/sweetalert.min.js') }}"></script>
</html>
