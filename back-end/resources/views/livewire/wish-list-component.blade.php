<div>
    <!-- scroll to top -->
    <div class="buton">UP</div>

    <!-- scroll to top -->

    <!-- cart -->
    <div class="cart wish">
        <div class="cart-top">
            <h4 class="mt-2">Wishlist</h4>

            <span class="close closeWish">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.5" width="40px" height="40px">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>

        </div>

        @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count()>0)
        @foreach($wishlist as $wish)
        <div>
            <!-- <p>item:</p>
            <p>qty: {{$wish->qty}}</p>
            <p>${{$wish->price}}</p>
            <p>subtotal: {{$wish->subtotal}}</p> -->
            <div class="wishItems">
            <form wire:submit.prevent="remove({{$wish->rowId}})">
                @csrf

                <span wire:click="removeProduct('{{$wish->rowId }}')"><i class="fa-solid fa-trash"></i></span>

            </form>
                <img src="imgs/jogging_top_01-300x300.webp" alt="">
                <p> {{$wish->name}}</p>
                <p>${{$wish->price}}</p>
                <p style="color:green;">in Stock</p>
                <span><i class="fa-solid fa-bag-shopping"></i></span>
            </div>
        </div>
        @endforeach
        @else
        <div class="cart-content">
            <span>
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 204.1 189.5"
                    style="enable-background: new 0 0 204.1 189.5" xml:space="preserve" width="100px" height="100px">
                    <g>
                        <g>
                            <path fill="currentColor" d="M154.9,139.5H58.4c-2.2,0-4-1.5-4.4-3.7L30.7,12.4H6.3c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5h28.2c2.2,0,4,1.5,4.4,3.7
                l23.3,123.4h92.7c2.5,0,4.5,2,4.5,4.5S157.4,139.5,154.9,139.5z"></path>
                        </g>
                        <g>
                            <path fill="currentColor" d="M166.1,109.5H54.5c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5h108.6l28-68.3H41.5c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5h156.3
                c1.5,0,2.9,0.7,3.7,2s1,2.8,0.4,4.2l-31.7,77.3C169.6,108.4,167.9,109.5,166.1,109.5z"></path>
                        </g>
                        <g>
                            <path fill="currentColor"
                                d="M76.3,186.1c-11.2,0-20.4-9.1-20.4-20.4s9.1-20.4,20.4-20.4c11.2,0,20.4,9.1,20.4,20.4S87.5,186.1,76.3,186.1z
                 M76.3,154.4c-6.3,0-11.4,5.1-11.4,11.4c0,6.3,5.1,11.4,11.4,11.4s11.4-5.1,11.4-11.4C87.6,159.5,82.5,154.4,76.3,154.4z"></path>
                        </g>
                        <g>
                            <path fill="currentColor"
                                d="M137,186.1c-11.2,0-20.4-9.1-20.4-20.4s9.1-20.4,20.4-20.4s20.4,9.1,20.4,20.4S148.3,186.1,137,186.1z M137,154.4
                c-6.3,0-11.4,5.1-11.4,11.4c0,6.3,5.1,11.4,11.4,11.4c6.3,0,11.4-5.1,11.4-11.4C148.4,159.5,143.3,154.4,137,154.4z"></path>
                        </g>
                        <g>
                            <path fill="currentColor" d="M128.2,85.1c-2.1,0-3.9-1.5-4.4-3.6c-1.1-5.2-5.8-9-11.1-9c-5.3,0-10,3.8-11.1,9c-0.5,2.4-2.9,4-5.3,3.5
                c-2.4-0.5-4-2.9-3.5-5.3c2-9.3,10.4-16.1,19.9-16.1c9.6,0,17.9,6.8,19.9,16.1c0.5,2.4-1,4.8-3.5,5.3
                C128.8,85,128.5,85.1,128.2,85.1z"></path>
                            <circle cx="95.9" cy="53.8" r="5.9" fill="currentColor"></circle>
                            <path fill="currentColor"
                                d="M129.5,47.9c-3.3,0-5.9,2.7-5.9,5.9s2.7,5.9,5.9,5.9c3.3,0,5.9-2.7,5.9-5.9S132.8,47.9,129.5,47.9z">
                            </path>
                        </g>
                    </g>
                </svg></span>


            <h6 class="mt-4">
                Your wishlist is currently empty. Let us help you find the perfect item!
            </h6>
            <a href="#" class="mt-5">Shop Men</a>
            <a href="#">Shop Women</a>
            <a href="#">Shop All</a>
            @endif
        </div>
    </div>


</div>
