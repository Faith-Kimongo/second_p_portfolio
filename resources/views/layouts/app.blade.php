<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ajiry - We Work') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <x-banner />
    @livewire('navigation-menu')
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow conatiner flex flex-row-1">
            <div class="border-b border-gray-200 pb-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $header }}</h3>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        <div class="mx-auto max-w-full">
            {{ $slot }}
        </div>
    </main>
<x-footer></x-footer>
    @stack('modals')
    @livewireScripts
</body>
</html>
