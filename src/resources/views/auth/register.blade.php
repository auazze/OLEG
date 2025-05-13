<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="form-control @error('name') is-invalid @enderror"
            />
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
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
                autocomplete="new-password"
                class="form-control @error('password') is-invalid @enderror"
            />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                class="form-control @error('password_confirmation') is-invalid @enderror"
            />
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex align-items-center justify-content-end">
            <a
                href="{{ route('login') }}"
                class="small text-secondary text-decoration-underline me-3"
            >
                {{ __('Already registered?') }}
            </a>
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>
