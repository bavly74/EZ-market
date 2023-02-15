{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-jet-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>sign in</title>
    <link rel="stylesheet" href="/css/sign.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
</head>
<body>
<x-guest-layout>
<div class="center">
    <h1>Login</h1>

@if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="text_field">
            <input type="email" name="email" id="email" :value="old('email')" required autofocus autocomplete="username" />
            <span></span>
            <label>Email</label>
        </div>
        <div class="text_field">
            <input type="password" name="password" id="password" required autocomplete="current-password" />
            <span></span>
            <label>Password</label>
        </div>
{{--        <div class="pass">Forgot Password?</div>--}}
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            {{--            <x-jet-button class="ml-4">--}}
            {{--                {{ __('Log in') }}--}}
            {{--            </x-jet-button>--}}
        </div><br>


        <input type="submit" value=" {{ __('Log in') }}" />
        <x-jet-validation-errors class="mb-4" />
        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

    </form><br>
    <div class="links">
        <span>Or connect with social media</span>
        <a href="{{ url('auth/facebook') }}"
        ><i class="fa-brands fa-facebook" style="color: #2222d4"></i
            ></a>
        <a href="{{ url('auth/google') }}"
        ><i
                class="fa-brands fa-google"
                style="
              background-image: linear-gradient(
                145deg,
                hsl(5deg 100% 50%) 40%,
                hsl(46deg 100% 50%) 40%,
                hsl(98deg 82% 44%) 65%,
                hsl(217deg 98% 44%) 50%
              );
              background-clip: text;
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
            "
            ></i
            ></a>
    </div>
    <div class="link_signup">
        Not a member? <a href="{{ route('register') }}">Register</a>
    </div>
</div>
    </x-guest-layout>

</body>
</html>
