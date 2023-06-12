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
    <body class="text-center container-fluid" data-bs-theme="{{ $usuario['tema'] }}">
        <div class="btn-group" role="group" aria-label="tema">
            <button type="button" id="tkokar" class="btn">Kokar</button>
            <button type="button" id="tdark" class="btn">Dark</button>
            <button type="button" id="tlight" class="btn">Light</button>
        </div>
        @yield('content')
    </body>
</html>
