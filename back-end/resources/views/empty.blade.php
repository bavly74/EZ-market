@livewireStyles

@include('links')
{{--@if (Route::has('login'))--}}

{{--    --}}{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--    @auth--}}
{{--        @include('layouts.navbar-with-my-account')--}}

{{--        --}}{{--                        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">sdfsdf</a>--}}
{{--    @else--}}

{{--        @include('layouts.navbar-with-sign-in')--}}

{{--        --}}{{--                        @if (Route::has('register'))--}}
{{--        --}}{{--                            <a href="{{ route('user.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--        --}}{{--                        @endif--}}
{{--    @endauth--}}
{{--    --}}{{--                </div>--}}
{{--@endif--}}

@include('layouts.navbar-with-sign-in')

@include('layouts.category')

@yield('content')


@include('layouts.footer')


<script src="js/scripts.js"></script>
@livewireScripts
