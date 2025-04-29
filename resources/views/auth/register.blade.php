<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br  p-4">
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl w-full max-w-md">
            
            <div class="relative bg-gradient-to-br from-green-400 to-yellow-300 p-8 text-center">
                <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="0.4" d="M0,224L48,218.7C96,213,192,203,288,197.3C384,192,480,192,576,181.3C672,171,768,149,864,149.3C960,149,1056,171,1152,170.7C1248,171,1344,149,1392,138.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                </svg>
                <div class="relative">
                    <h1 class="text-2xl font-bold text-white">Welcome to the website</h1>
                    <p class="text-white mt-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="px-8 pb-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="text-center text-lg font-bold text-green-700 mb-6"><b>USER REGISTER</b></h2>
                    <input type="hidden" name="role" value="user">
                    <!-- Name -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-user"></i>
                        </span>
                        <input class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm"
                         id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"  placeholder="Name">
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-user"></i>
                        </span>
                        <input class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm"
                         id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"  placeholder="Email">
                        @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm"
                         id="password" type="password" name="password" required autocomplete="new-password"  placeholder="Password">
                        @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4 relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-green-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm"
                         id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">
                        @if ($errors->has('password_confirmation'))
                            <div class="error">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>

                    <div class="flex justify-between items-center mb-6 text-sm text-gray-600">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="rounded text-green-600 border-gray-300 focus:ring-green-500">
                            <span class="ml-2">Remember</span>
                        </label>
                        <a href="{{ route('login') }}" class="text-green-600 hover:underline">{{ __('Already registered?') }}</a>
                        
                    </div>
                    {{-- <button type="submit" class="w-full bg-green-600 text-white rounded-full py-2 font-semibold hover:bg-green-700 transition duration-200">
                        {{ __('Register') }}</button> --}}
                        <button type="submit"
                        class="w-full bg-green-600 text-white rounded-full py-2 font-semibold hover:bg-green-700 transition duration-200">
                        SignUp
                    </button>
                </form>
            </div>    
        </div>    
    </div>

</x-guest-layout>
