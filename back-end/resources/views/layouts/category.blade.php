<nav class="secNavbar">
    <div class="navlinks">
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <ul class="navMenu">

            <div class="logo-mark">
                <a href="#"><img src="/imgs/logo.jfif" alt="" /> </a>
            </div>
            <li class="navMenuLink">
                <a href="/" class="navLink"><span>{{trans('category_trans.home')}}</span> </a>
            </li>
            <li class="navMenuLink">
                <a href="{{route('allProducts')}}" class="navLink">
                    <span> {{trans('category_trans.shop')}} </span> </a>
            </li>

            <li class="menu navMenuLink">
                <a href="{{route('mencat')}}" class="navLink">
                    <span> {{trans('category_trans.men')}} </span>
                    <i class="fa-solid fa-angle-down"></i>
                </a>

                <div class="drop">
                    <div class="drop-content">
                        <ul>
                            <p>Men</p>
                            <li><a href="#">Coats & Jackets</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">ShirtsSale</a></li>
                            <li><a href="#">Sportswear</a></li>
                            <li><a href="#">T-shirts4</a></li>
                            <p>OFFERS</p>
                            <li><a href="#">All products</a></li>
                            <li><a href="#">On sale</a></li>
                        </ul>
                        <div class="pics">
                            {{-- @livewire('men-at-navbar') --}}
                        </div>
                    </div>
                </div>
            </li>

            <li class="menu navMenuLink">
                <a href="{{route('women.index')}}" class="navLink">
                    <span> {{trans('category_trans.women')}} </span>
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <div class="drop">
                    <div class="drop-content">
                        <ul>
                            <p>WOMEN</p>
                            <li><a href="#">Cardigans & Jumpers</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Outdoor</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Tops</a></li>
                            <p>SPECIALS</p>
                            <li><a href="#">All products</a></li>
                            <li><a href="#">On sale</a></li>
                        </ul>
                        <div class="pics">

                            @livewire('women-at-navbar')


                        </div>
                    </div>
            </li>



            <li class="menu navMenuLink">
                <a href="{{route('kids.index')}}" class="navLink">
                    <span> {{trans('category_trans.kids')}} </span>
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <div class="drop">
                    <div class="drop-content">
                        <ul>
                            <p>KIDS</p>
                            <li><a href="#">Cardigans & Jumpers</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Outdoor</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Tops</a></li>
                            <p>SPECIALS</p>
                            <li><a href="#">All products</a></li>
                            <li><a href="#">On sale</a></li>
                        </ul>
                        <div class="pics">
                            @livewire('kids-at-navbar')


                        </div>
                    </div>
                </div>
            </li>

            <li class="navMenuLink">
                <a href="#" class="navLink"> <span> about </span> </a>
            </li>
            <li class="navMenuLink">
                <a href="{{url('contact-us')}}" class="navLink"> <span> contact </span> </a>
            </li>
        </ul>
        <a href="#!">
            <div class="floatCart">
                <span>$total?</span>

                <span class="bagCart">1</span>
            </div>
        </a>
    </div>
</nav>
