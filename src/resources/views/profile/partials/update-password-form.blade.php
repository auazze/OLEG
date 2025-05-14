<section>
    <header>
        <h2 class="h5 fw-medium text-body">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 small text-secondary">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="current_password" class="form-label">
                {{ __('Current Password') }}
            </label>
            <input
                id="current_password"
                name="current_password"
                type="password"
                autocomplete="current-password"
                class="form-control @error('current_password') is-invalid @enderror"
            />
            @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">
                {{ __('New Password') }}
            </label>
            <input
                id="password"
                name="password"
                type="password"
                autocomplete="new-password"
                class="form-control @error('password') is-invalid @enderror"
            />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">
                {{ __('Confirm Password') }}
            </label>
            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
                class="form-control @error('password_confirmation') is-invalid @enderror"
            />
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex align-items-center gap-3 mt-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if(session('status') === 'password-updated')
                <p class="small text-secondary mb-0">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
