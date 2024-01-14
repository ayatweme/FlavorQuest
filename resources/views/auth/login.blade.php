{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<form  method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group mt-md-3 pb-md-3">
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
        <div class="form-control-box">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <rect data-name="Bounding Box" width="24" height="24"
                        fill="rgba(255,255,255,0)"></rect>
                    <path
                        d="M3,22a3,3,0,0,1-3-3V12A3,3,0,0,1,3,9H4V6A6,6,0,0,1,16,6V9h1a3,3,0,0,1,3,3v7a3,3,0,0,1-3,3ZM2,12v7a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H3A1,1,0,0,0,2,12ZM14,9V6A4,4,0,1,0,6,6V9Z"
                        transform="translate(2 1)" fill="#7f7f7f"></path>
                </svg>
            </span>
            <div class="text-right">
                <a href="{{ route('password.request') }}" class="text-orange small font-weight-medium">Forgot Password?</a>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-lg btn-block btn-primary">{{ __('Log in') }}</button>
</form>
<div class="text-center login-footer">
    <p>Don’t have an account? <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Sign up</a></p>
</div>