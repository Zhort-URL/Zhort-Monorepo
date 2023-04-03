<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zhort') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=karla:400,500,600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.bunny.net/css?family=inconsolata:400,500,600&display=swap" rel="stylesheet"/>

        <!-- CSS -->
        @notifyCss

        <!-- Scripts -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css'/*, 'resources/js/app.js'*/])
        @notifyJs
    </head>
    <body class="font-sans antialiased dark:bg-zhort-darker">
        <div class="min-h-screen">
            <!-- Sidebar loads content, must be included. -->
            @include('layouts.sidebar')
            @include('notify::components.notify')

        </div>
    </body>
</html>
