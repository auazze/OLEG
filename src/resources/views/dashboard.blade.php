<x-app-layout>
    <x-slot name="header">
        <!-- Заголовок страницы в стиле Bootstrap -->
        <div class="container" data-bs-theme="dark">
            <h2 class="h2 mb-0">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <!-- Основной контент -->
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Карточка Bootstrap вместо Tailwind-блока -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
