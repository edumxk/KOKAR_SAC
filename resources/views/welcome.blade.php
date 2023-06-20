<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SAC Kokar</title>
        @vite(['resources/js/app.js','resources/sass/app.scss', 'resources/css/app.css'])
    </head>
    <section class="header">
        @yield('header')
    </section>
    <body class="text-center container-fluid">
        @yield('content')
    </body>
</html>
