<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.header')

        <main id="content" class="shrink-0 min-h-160">
            {{ $slot }}
        </main>

        @include('partials.footer')
    </body>
</html>
