<section>
    <header>
        <h2 class="h5 fw-medium text-body">{{ __('Extra info') }}</h2>
        <p class="mt-1 small text-secondary">{{ __('Phone and address.') }}</p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input
                id="phone"
                name="phone"
                type="text"
                value="{{ old('phone', $user->phone) }}"
                class="form-control @error('phone') is-invalid @enderror"
            />
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input
                id="address"
                name="address"
                type="text"
                value="{{ old('address', $user->address) }}"
                class="form-control @error('address') is-invalid @enderror"
            />
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex align-items-center gap-3 mt-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if(session('status') === 'profile-updated')
                <p class="small text-secondary mb-0">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
