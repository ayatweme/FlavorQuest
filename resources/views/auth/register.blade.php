{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<form  method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group mt-md-3 pb-md-3">
        <!-- Name Field -->
        <div class="form-control-box">
            <input type="text" class="form-control" name="name" placeholder="Name">
           
            <span class="form-icon">
                <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <rect data-name="Bounding Box" width="24" height="24"
                        fill="rgba(255,255,255,0)"></rect>
                       
                    <path
                    d="M2 20s0-3 3-3h14s3 0 3 3"
                        transform="translate(1 3)" fill="#7f7f7f"></path>
                </svg>
            </span>
        </div>
    </div>
    
    <div class="form-group mt-md-3 pb-md-3">
        <!-- Email Field -->
        <div class="form-control-box">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="form-icon">
                <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <rect data-name="Bounding Box" width="24" height="24"
                        fill="rgba(255,255,255,0)"></rect>
                    <path
                        d="M3,18a3,3,0,0,1-3-3V3.01C0,3,0,2.99,0,2.98A3,3,0,0,1,3,0H19a3,3,0,0,1,3,2.968c0,.018,0,.036,0,.054V15a3,3,0,0,1-3,3ZM2,15a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V4.921l-8.427,5.9a1,1,0,0,1-1.147,0L2,4.921ZM11,8.78l8.895-6.226A1,1,0,0,0,19,2H3a1,1,0,0,0-.895.553Z"
                        transform="translate(1 3)" fill="#7f7f7f"></path>
                </svg>
            </span>
        </div>
    </div>
    
    <div class="form-group mt-md-3 pb-md-3">
        <!-- Password Field -->
        <div class="form-control-box">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <rect data-name="Bounding Box" width="24" height="24"
                        fill="rgba(255,255,255,0)"></rect>
                    <path
                        d="M3,22a3,3,0,0,1-3-3V12A3,3,0,0,1,3,9H4V6A6,6,0,0,1,16,6V9h1a3,3,0,0,1,3,3v7a3,3,0,0,1-3,3ZM2,12v7a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H3A1,1,0,0,0,2,12ZM14,9V6A4,4,0,1,0,6,6V9Z"
                        transform="translate(2 1)" fill="#7f7f7f"></path>
                </svg>
            </span>
        </div>
    </div>
    
    <div class="form-group mt-md-3 pb-md-3">
        <!-- Confirm Password Field -->
        <div class="form-control-box">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            <span class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <rect data-name="Bounding Box" width="24" height="24"
                        fill="rgba(255,255,255,0)"></rect>
                    <path
                        d="M3,22a3,3,0,0,1-3-3V12A3,3,0,0,1,3,9H4V6A6,6,0,0,1,16,6V9h1a3,3,0,0,1,3,3v7a3,3,0,0,1-3,3ZM2,12v7a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H3A1,1,0,0,0,2,12ZM14,9V6A4,4,0,1,0,6,6V9Z"
                        transform="translate(2 1)" fill="#7f7f7f"></path>
                </svg>
            </span>
        </div>
    </div>
    
    <div class="form-group mt-md-3 pb-md-3">
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
    </div>
</form>
