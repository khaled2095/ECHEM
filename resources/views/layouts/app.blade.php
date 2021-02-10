<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('extra_css')

</head>

<body>

    <div id="app">
        <x-nav-bar />



        @if (session()->has('message'))

            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif

        @if (session()->has('error'))

            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>

        @endif

        <main>
            @yield('content')
        </main>
        <x-chat/>
    </div>

    @if(auth()->check())
    <script>
        var authuser = @JSON(auth()->user())
    </script>
    @endif


    @livewireScripts
    <x-footer />

</body>

</html>
