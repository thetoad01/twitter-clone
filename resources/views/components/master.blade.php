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
    {{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3ba663f2f.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <section class="px-4 py-2 mb-2">
        <header class="container mx-auto">
            <h1>
                <a href="{{ route('welcome') }}"><img src="/images/logo.svg" alt="Tweety logo"></a>
            </h1>
        </header>
    </section>

    {{ $slot }}
</div>
</body>
</html>
