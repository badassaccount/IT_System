<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CPFPI') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased h-full">
        <x-banner />

        <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="flex-1 flex flex-col h-full">
                @livewire('navigation-top')
                <!-- Page Heading -->
                @if (isset($header))
                    <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center">
                        <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <main class="flex-1">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>