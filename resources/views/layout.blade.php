<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Maxime Pie')</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    </head>
    <body>
        <div class="Layout">
            @include('header')
            <div class="container @yield('pageClassName', '')">
                @yield('content')
            </div>
        </div>
    </body>
</html>
