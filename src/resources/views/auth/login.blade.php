<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="alert alert-success mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                class="form-control @error('email') is-invalid @enderror"
            />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                class="form-control @error('password') is-invalid @enderror"
            />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input
                id="remember_me"
                type="checkbox"
                name="remember"
                class="form-check-input"
            />
            <label for="remember_me" class="form-check-label">
                {{ __('Remember me') }}
            </label>
        </div>

        <div class="d-flex align-items-center justify-content-end mt-4">
            @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="small text-secondary text-decoration-underline me-3"
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="btn btn-primary">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
