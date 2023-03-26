<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=karla:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inconsolata:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-zhort-darker">
            <div>
                <a href="/">
                    <x-application-logo class="w-24 h-24" />
                </a>
            </div>
            <h1 class="text-white text-4xl font-bold font-karla">@yield('title')</h1>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-zhort-dark shadow-md overflow-hidden sm:rounded-3xl border border-zhort-darkish">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
