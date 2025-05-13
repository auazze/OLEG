<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts (оставьте, если нужны) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts через Vite -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Здесь можно подключить собранные asset’ы вручную -->
    @endif
</head>
<body>

<!-- Навбар Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<main class="container py-5">
    <div class="row align-items-center">
        <!-- Левая колонка -->
        <div class="col-lg-7 mb-4 mb-lg-0">
            <h1 class="display-5 fw-bold mb-3">Let's get started</h1>
            <p class="lead text-muted mb-4">
                Laravel has an incredibly rich ecosystem. We suggest starting with the following.
            </p>

            <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Read the Documentation
                    <a href="https://laravel.com/docs" target="_blank" class="btn btn-link p-0">Docs</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Watch video tutorials at Laracasts
                    <a href="https://laracasts.com" target="_blank" class="btn btn-link p-0">Laracasts</a>
                </li>
            </ul>

            <a href="https://cloud.laravel.com" target="_blank" class="btn btn-dark">Deploy now</a>
        </div>

        <!-- Правая колонка -->
        <div class="col-lg-5 text-center">
            <!-- наш компонент с SVG-логотипом -->
            <x-application-logo class="img-fluid" style="max-width: 438px;" />
        </div>
    </div>
</main>

</body>
</html>
