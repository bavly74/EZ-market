@livewireStyles

@include('links')
@include('layouts.navbar-with-sign-in')
@include('layouts.category')
@include('layouts.cart')
@include('layouts.wishlist')
@yield('content')


@include('layouts.footer')


<script src="/js/scripts.js"></script>
<script src="/js/productDetails.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@livewireScripts
