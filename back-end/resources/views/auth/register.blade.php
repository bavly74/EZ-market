{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}










    <!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/logo.png" />
    <title>sign up</title>
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

<div class="container">
{{--        <x-jet-authentication-card>--}}
{{--            <x-slot name="logo">--}}
{{--                <x-jet-authentication-card-logo />--}}
{{--            </x-slot>--}}


    <div class="title">Registration</div>

    <div class="content">
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="user-details">
                <div class="input-box">

                    <x-jet-label for="name" value="{{ __('username') }}" />
                    <input type="text" id="name" name="name" placeholder="Enter your username" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <div class="input-box">
                    <x-jet-label for="name" value="{{ __('Email') }}" />
                    <input type="emal" id="email" name="email" placeholder="Enter your email" :value="old('email')" required autocomplete="username"  />
                </div>

                <div class="input-box">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <input id="password"  type="password" name="password" placeholder="Enter your password" required autocomplete="new-password" />
                </div>

                <div class="input-box">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password"  />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
            </div>

            <div class="button">
                <input type="submit" value="Register" />
            </div>
            <x-jet-validation-errors class="mb-4" />
            <div class="links">
                <span>Or connect with social media</span>
                <a href="{{ url('auth/facebook') }}"
                ><i class="fa-brands fa-facebook" style="color: #2222d4"></i
                    ></a>
{{--                <a href="{{ url('auth/facebook') }}"--}}
{{--                ><img src="./imgs/fb-logo.jpeg" title="Facebook"--}}
{{--                    /></a>--}}

                <a href="{{ url('auth/google') }}"><i
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
                {{ __('Already registered?') }} <a href="{{ route('login') }}">  {{ __('Log in') }}</a>
            </div>
        </form>
    </div>
{{--            </x-jet-authentication-card>--}}
</div>
    </x-guest-layout>

</body>
</html>

