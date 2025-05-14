<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 fw-semibold text-body">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="d-flex flex-column gap-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
