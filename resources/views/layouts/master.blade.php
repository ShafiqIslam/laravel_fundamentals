<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 5 Fundamentals</title>

    <link href="{{ elixir('css/styles.css', '') }}" rel="stylesheet">
</head>
<body id="app-layout">
    
    @include('partials._header')

    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>
    
    @include('partials._footer')

    <script src="{{ elixir('js/scripts.js', '') }}"></script>
    
</body>
</html>
