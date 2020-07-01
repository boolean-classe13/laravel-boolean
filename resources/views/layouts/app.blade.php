<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="@yield('body-class')">
        @include('partials.menu')
        @yield('content')
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
