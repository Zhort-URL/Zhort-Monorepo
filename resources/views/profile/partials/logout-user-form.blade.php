<section class="space-y-6">
    <header>
        <h2 class="text-lg font-karla font-semibold  text-gray-900 dark:text-gray-100">
            {{ __('Logout account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Log out of your account.') }}
        </p>
    </header>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-danger-button>{{ __('Logout account') }}</x-danger-button>
    </form>

</section>
