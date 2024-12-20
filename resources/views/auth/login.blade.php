<x-guest-layout>
    <div class="text-center mb-6">
        <!-- Selamat Datang Title -->
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white tracking-wide">
            Selamat Datang di <span class="text-red-600 underline decoration-wavy">Martcode</span>
        </h1>
        <p class="text-lg text-gray-700 dark:text-gray-300 mt-4 font-semibold">
            Silakan <span class="text-red-600">masuk</span> ke akun Anda dan nikmati pengalaman terbaik!
        </p>
    </div>
    

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white dark:bg-gray-800 shadow-md rounded-lg px-8 py-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 checked:bg-red-500 checked:border-red-500">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-4 bg-red-600 hover:bg-red-500 focus:ring-red-500">
                {{ __('Log in') }}
            </x-primary-button>

            <!-- Register Button -->
            <a href="{{ route('register') }}" class="ms-4 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Register') }}
            </a>
        </div>
    </form>
</x-guest-layout>
