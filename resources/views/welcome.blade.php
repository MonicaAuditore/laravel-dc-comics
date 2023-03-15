<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> 
        <h1>Test</h1>


    </body>
</html>
