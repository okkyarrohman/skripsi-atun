<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-bold"/>
            <i class="fa fa-envelope icon"></i>
            <x-text-input id="email" class="block mt-1 w-full h-14 rounded-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan email anda"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full h-14 rounded-lg"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Masukkan Password anda"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- buttons -->
            <x-primary-button class="flex items-center mt-12 w-full h-14 justify-center bg-orange-400 rounded-xl">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
