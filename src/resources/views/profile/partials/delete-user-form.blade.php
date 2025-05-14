<section class="mb-4">
    <header>
        <h2 class="h5 fw-medium text-body">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 small text-secondary">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        type="button"
        class="btn btn-danger"
        x-on:click.prevent="$dispatch('open-modal','confirm-user-deletion')"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
            @csrf
            @method('delete')

            <h2 class="h5 fw-medium text-body">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>
            <p class="mt-1 small text-secondary">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-3 mb-3">
                <label for="password" class="form-label visually-hidden">
                    {{ __('Password') }}
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="{{ __('Password') }}"
                    class="form-control w-75 @error('password') is-invalid @enderror"
                />
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end gap-3">
                <button
                    type="button"
                    class="btn btn-secondary"
                    x-on:click="$dispatch('close')"
                >
                    {{ __('Cancel') }}
                </button>
                <button type="submit" class="btn btn-danger">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
