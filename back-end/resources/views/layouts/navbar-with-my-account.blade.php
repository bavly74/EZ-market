
@if (App::getLocale() == 'ar')
    <html dir="rtl">
    @else
        <html>
@endif

<header class="firstNavbar padding-section">
    <div class="logoSection">
        <div class="logo">
            <img src="imgs/logo.jfif" alt="logo" class="logoImg" />
        </div>
         <!-- logo -->
         <section>
          <div class="content">
            <h2>EZ market</h2>
            <h2>EZ market</h2>
          </div>
        </section>
        <!-- logo -->
    </div>
    <div class="searchSection">
        <i class="fa-solid fa-magnifying-glass icon"></i>
        <input type="text" placeholder="{{trans('nav_trans.Search products...')}}" />
    </div>
    <div class="userSection">
        <a href="#">
            <div class="userInfo">
                <i class="fa-solid fa-circle-user"></i>
                <p>{{auth()->user()->name}}</p>
            </div>
        </a>
        <a href="#">
            <div class="userInfo">
                <i class="fa-solid fa-circle-question"></i>
                <p>{{trans('nav_trans.customer help')}}</p>
            </div>
        </a>

        <a href="#" id="cart">
            <div class="userInfo">
                @livewire('cart-counter')

            </div>
        </a>

{{--        <a href="#">--}}
{{--            <div class="userInfo">--}}
{{--                <i class="fa-solid fa-right-to-bracket"></i>--}}
{{--                <p>{{trans('nav_trans.log out')}}</p>--}}
{{--            </div>--}}
{{--        </a>--}}


        <form method="get" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"

     @click.prevent="$root.submit();">
                <div class="userInfo">
                <i class="fa-solid fa-right-to-bracket change-icon"></i>
                <p>{{ __('Log Out') }}</p>
                </div>
{{--                {{ __('Log Out') }}--}}
            </x-jet-dropdown-link>
        </form>

    </div>


    <div class="dropdown">
        <button
            class="btn dropdown-toggle empty"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-globe"></i>
        </button>

        <ul class="dropdown-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>

        </html>
