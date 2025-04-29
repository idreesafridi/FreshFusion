<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br  p-4">
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl w-full max-w-md">
            <div class="relative bg-gradient-to-br from-green-400 to-yellow-300 p-8 text-center">
                <div class="relative">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="px-8 pb-8">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4 relative">
                        <x-input-label  for="email" :value="__('Email')" />
                        <x-text-input id="email"  class="pl-10 pr-4 py-2 w-full rounded-full custom-input-bg border border-gray-300 focus:ring-green-500 focus:border-green-500 shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div >

                     <x-primary-button   class="w-full bg-green-600 text-white rounded-full py-2 font-semibold hover:bg-green-700 transition duration-200">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>    
        </div> 
    </div> 
</x-guest-layout>
