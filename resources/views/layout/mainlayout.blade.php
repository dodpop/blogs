<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.partials.head')
    </head>
    <body>
        @include('layout.partials.nav')
        @include('layout.partials.content')
        @include('layout.partials.footer')       
    </body>
</html>
