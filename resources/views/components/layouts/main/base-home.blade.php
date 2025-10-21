<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head-home')
    </head>
    <body>
        @include('partials.top-header')
        @include('partials.nav-header')

            {{ $slot }}

        @include('partials.footer')
    </body>
</html>
