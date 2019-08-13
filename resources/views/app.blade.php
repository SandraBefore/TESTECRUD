<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>window.laravel = {csrfToken: '{{ csrf_token() }}'}</script>

        <title>Laravel</title>

    </head>

    <body>

    <div id="app">
        <index></index>
    </div>

    <script src="{{ asset('js/app.js')}}"></script>

    </body>
</html>
