@php use Illuminate\Contracts\Auth\MustVerifyEmail; @endphp
<section>
    <header>
        <h2 class="h5 fw-medium text-body">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 small text-secondary">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        {{-- Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
                class="form-control @error('name') is-invalid @enderror"
            />
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
                class="form-control @error('email') is-invalid @enderror"
            />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3">
                    <p class="small text-body mb-2">
                        {{ __('Your email address is unverified.') }}
                        <button
                            form="send-verification"
                            type="submit"
                            class="btn btn-link p-0 small text-secondary text-decoration-underline"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if(session('status') === 'verification-link-sent')
                        <p class="small fw-medium text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Phone --}}
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

        {{-- Address --}}
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
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if(session('status') === 'profile-updated')
                <p class="small text-secondary mb-0">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
