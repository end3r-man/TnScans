<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{ seo()->render() }}

        <title>{{ $title ?? 'Page Title' }} | TnScans</title>

        @livewireStyles
        
        @vite('resources/css/app.css')
    </head>
    <body>


        <div class="w-screen h-screen font-poppine flex">

            {{-- Home Navbar --}}
            @livewire('home.comp.nav-bar')

            {{ $slot }}

            {{-- Latest Pg --}}
            @livewire('home.comp.latest-pg')
            
        </div>

        {{-- Livewire-scrip --}}
        @livewireScripts

        {{-- Pust Js Scrips --}}
        @stack('js')

        {{-- Iconifiy-script --}}
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    </body>
</html>