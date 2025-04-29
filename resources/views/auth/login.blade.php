<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('login') }}">
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

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
    
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br  p-4">
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl w-full max-w-md">
            <!-- Top Section -->
            <div class="relative bg-gradient-to-br from-green-400 to-yellow-300 p-8 text-center">
                <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="0.4" d="M0,224L48,218.7C96,213,192,203,288,197.3C384,192,480,192,576,181.3C672,171,768,149,864,149.3C960,149,1056,171,1152,170.7C1248,171,1344,149,1392,138.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                </svg>
                <div class="relative">
                    <h1 class="text-2xl font-bold text-white">Welcome to the website</h1>
                    <p class="text-white mt-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            

            <!-- Bottom Section -->
            <div class="px-8 pb-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <h2 class="text-center text-lg font-bold text-green-700 mb-6"><b>USER LOGIN</b></h2>
                        
                    <!-- Email/Username -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-user"></i>
                        </span>
                        <input id="email" type="email" name="email" placeholder="Username" required autofocus
                            class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password" type="password" name="password" placeholder="Password" required
                            class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm" />
                    </div>

                    <!-- Remember + Forgot Password -->
                    <div class="flex justify-between items-center mb-6 text-sm text-gray-600">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="rounded text-green-600 border-gray-300 focus:ring-green-500">
                            <span class="ml-2">Remember</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-green-600 hover:underline">Forgot Password?</a>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-green-600 text-white rounded-full py-2 font-semibold hover:bg-green-700 transition duration-200">
                        Login
                    </button>
                    <!-- Create Account Button -->
                    <div class="flex justify-center ">
                        {{-- <a href="{{ route('register') }}" class="bg-white text-green-600 font-semibold rounded-full px-6 py-2 shadow-md hover:bg-gray-100 transition duration-300">
                            Create Account
                        </a> --}}
                        <p>Don't have Account?</p> &nbsp;
                        <a href="{{ route('register') }}" class="text-green-600 hover:underline">SignUp</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    
</x-guest-layout>
