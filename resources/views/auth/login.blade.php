<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @section ('title','Login to your account')

    <div class="my-6 mx-4">
        <form class="" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="example@example.com" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="········"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-zhort-darker border-gray-300 bg-zhort-primary dark:border-gray-700 text-zhort-primary shadow-sm active:ring-0 focus:ring-0" name="remember">
                    <span class="ml-2 text-base text-gray-600 dark:text-zhort-gray">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center dark:text-zhort-gray justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 dark:text-zhort-primary dark:hover:text-zhort-secondary hover:text-gray-900 rounded-md font-semibold" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <a class="text-sm text-gray-600 dark:text-zhort-primary dark:hover:text-zhort-secondary hover:text-gray-900 rounded-md font-semibold" href="{{ route('register') }}">
                    {{ __('New here? Register Now!') }}
                </a>
            </div>
            <x-primary-button class="w-full py-3 my-6 rounded-xl font-bold text-lg">
                <span class="mx-auto">{{ __('Log in') }}</span>
            </x-primary-button>
        </form>
    </div>

</x-guest-layout>
