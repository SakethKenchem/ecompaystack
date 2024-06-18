<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'EcommercePaystack' }}</title>
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        @livewire('partials.navbar')
        <main>
            {{ $slot }}
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        @livewireScripts
    </body>
</html>
