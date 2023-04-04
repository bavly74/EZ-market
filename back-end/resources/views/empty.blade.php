@livewireStyles

@include('links')
@include('layouts.navbar-with-sign-in')
@include('layouts.category')
@include('layouts.cart')
@include('layouts.wishlist')
@yield('content')


@include('layouts.footer')


<script src="js/scripts.js"></script>
<script src="js/productDetails.js"></script>

@livewireScripts
