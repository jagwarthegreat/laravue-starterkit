<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <?php
    $auth = auth()->user();
    ?>
    <script>
        window.sessionUserId = "{{ Auth::id() }}";
        window.sessionFullname = "{{ Auth::id() > 0 ? $auth->name : ''; }}";
        window.sessionUsername = "{{ Auth::id() > 0 ? $auth->email  : '' ; }}";
        window.configAppName = "{{ config('app.name', 'Laravel') }}"
    </script>
</head>

<body>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div id="app">
        <app></app>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>