<section>
    <header>
        <h2 class="tw-text-lg tw-font-medium tw-text-gray-900 dark:tw-text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="tw-mt-1 tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="tw-mt-6 tw-space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')"
                class="w-text-gray-900 dark:tw-text-gray-100" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="tw-mt-1 tw-block tw-w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="tw-mt-2 tw-text-gray-900 dark:tw-text-gray-100" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')"
                class="w-text-gray-900 dark:tw-text-gray-100" />
            <x-text-input id="update_password_password" name="password" type="password"
                class="tw-mt-1 tw-block tw-w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="tw-mt-2 tw-text-gray-900 dark:tw-text-gray-100" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')"
                class="w-text-gray-900 dark:tw-text-gray-100" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="tw-mt-1 tw-block tw-w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="tw-mt-2 tw-text-gray-900 dark:tw-text-gray-100" />
        </div>

        <div class="tw-flex tw-items-center tw-gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
