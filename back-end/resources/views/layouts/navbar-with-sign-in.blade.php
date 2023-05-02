<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

@if (App::getLocale() == 'ar')
<html dir="rtl">
@else
<html>
@endif



<header class="firstNavbar padding-section">
    <div class="logoSection">
        <div class="logo">
            <img src="/imgs/logo.jfif" alt="logo" class="logoImg" />
        </div> <!-- logo -->
        <section>
            <div class="content">
                <h2>E<div class="bounce">Z</div> market</h2>
                <h2>E<div class="bounce">Z</div> market</h2>
            </div>
        </section>
        <!-- logo -->
    </div>
    <div class="searchSection">
        <form action="{{route('search')}}" method="get">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <input type="text" name="search" value="{{Request::get('search')}}"
                placeholder="{{trans('nav_trans.Search products...')}}" />
            <button type="submit">Search</button>
        </form>

    </div>
    @auth
    <div class="userSection">
        <div class="dropdown">
            <button class="btn  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <a href="#">
                    <div class="userInfo">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>{{auth()->user()->name}}</p>
                    </div>
                </a>

            </button>
            <ul class="dropdown-menu">

                <li class="colory">

                    <form method="get" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            style="padding: 17px;display: block;">
                            <div class="userInfo loged">
                                <i class="fa-solid fa-right-to-bracket change-icon"></i>
                                <p>{{ __('Log Out') }}</p>
                            </div>
                            {{--                {{ __('Log Out') }}--}}
                        </a>
                    </form>
                </li>
                <li class="colory">
                    <a href="{{route('profile.show') }}" style="padding: 17px;display: block;">
                        <div class="userInfo loged">
                            <i class="fa-solid fa-user"></i>
                            <p>PROFILE</p>
                        </div>
                    </a>
                </li>
                <li class="colory">
                    <a href="{{url('my_orders') }}" style="padding: 17px;display: block;">
                        <div class="userInfo loged">
                        <i class="fa-solid fa-bag-shopping"></i>
                            <p>My orders</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>


        @else

        <a href="{{ route('login') }}">
            <div class="userInfo">
                <i class="fa-solid fa-right-to-bracket change"></i>
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="person-to-portal" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="hover-icon svg-inline--fa fa-person-to-portal fa-xl" width="20px" height="20px">
                    <path fill="currentColor"
                        d="M272 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-90.7 12.6c-14-3.5-28.7-3.5-42.7 0l-1.8 .5c-13.3 3.3-25.6 9.7-35.9 18.6L56.4 165.8c-10.1 8.6-11.2 23.8-2.6 33.8s23.8 11.2 33.8 2.6l44.5-38.2c4.7-4 10.3-6.9 16.3-8.4l1.8-.5c6.4-1.6 13-1.6 19.4 0l8.6 2.1-32.7 98c-8.5 25.5 2.3 53.4 25.7 66.5l88 49.5L225.1 480.8c-4 12.7 3.1 26.1 15.7 30.1s26.1-3.1 30.1-15.8L307 379.5c5.6-18-2.1-37.5-18.6-46.8l-32.1-18 28.1-84.4 5.6 18.2C297.3 272 319 288 343.6 288H352h16.5H392c13.3 0 24-10.7 24-24s-10.7-24-24-24H368.1c1.2-82.9 11.4-134.5 24.1-164c12.4-28.7 22.4-28.1 23.7-28l.1 0 .1 0c1.3-.1 11.3-.7 23.7 28c13.5 31.4 24.2 87.7 24.2 180s-10.7 148.6-24.2 180c-12.4 28.7-22.4 28.1-23.7 28l-.1 0-.1 0c-1.3 .1-11.3 .7-23.7-28c-10.1-23.4-18.6-60.5-22.2-116H352 321.9c8.8 140.7 47.6 192 94.1 192c53 0 96-66.6 96-256S469 0 416 0c-46.2 0-84.8 50.6-93.9 189.1l-5.8-18.9c-5.8-18.7-20.9-33.1-39.9-37.9l-95-23.7zm70.8 67.2l-38.3 115-19-10.7c-3.3-1.9-4.9-5.9-3.7-9.5L225 169l27.1 6.8zM122.5 317.1L103.4 368H24c-13.3 0-24 10.7-24 24s10.7 24 24 24h84.9c16.7 0 31.6-10.3 37.4-25.9l14.1-37.6-4.9-2.8c-14.1-8-25.4-19.3-33-32.6z"
                        class=""></path>
                </svg>
                <p>{{trans('nav_trans.sign in')}}</p>
            </div>
        </a>


        @endauth


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

        <a href="#" id="wish">
            <div class="userInfo">
                @livewire('wish-list-counter')

            </div>
        </a>

    </div>

    <div class="dropdown">
        <button class="btn dropdown-toggle empty" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-globe"></i>
        </button>
        <ul class="dropdown-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
            @endforeach
    </div>
</header>

</html>
