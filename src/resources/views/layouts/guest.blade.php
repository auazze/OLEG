<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts (оставляем по необходимости) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">
    <div class="mb-4 text-center">
        <a href="/">
            <x-application-logo style="width:5rem; height:5rem;" />
        </a>
    </div>

    <div class="card w-100" style="max-width: 28rem;">
        <div class="card-body p-4">
            {{ $slot }}
        </div>
    </div>
</div>
</body>
</html>
