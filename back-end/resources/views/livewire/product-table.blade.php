<section class="products-section padding-section">
    <h2 class="products-section-before">OFFERS</h2>
{{--    <div id="box">--}}
{{--        @if (session()->has('message'))--}}
{{--        <div class="alert alert-success alertD ">--}}
{{--            <span>--}}
{{--                <i class="fa-solid fa-circle-check"></i>--}}
{{--            </span>--}}
{{--            {{ session('message') }}--}}

{{--        </div>--}}
{{--        @endif--}}
{{--    </div>--}}
    @include('layouts.notification')
    <div class="products-section-row">
        @foreach($products as $product)
        <div class="product">
            <div class="productImg">
                <img src="imgs/{{$product->pro_image1}}" alt="" />
                <img src="imgs/{{$product->pro_image2}}" alt="" />

            </div>

            <div class="productInfo">
                <p>{{$product->brand->name}}</p>
                <p><strong> {{$product->productName}} </strong></p>
                <span class="price"> <del>{{$product->productCost}}$ </del> {{$product->price}}$</span>

                    <p style="color:black"><strong>in stock :{{$qty->inventory->quantity}} </strong></p>

            </div>

            <form wire:submit.prevent="addItemToCart({{$product->id}})">
                @csrf
                <input wire:model="quantity.{{$product->id}}" type="number">
                <button type="submit" class="add-cart addToCart" >Add to cart</button>
            </form>

            <form wire:submit.prevent=" addItemToWishlist({{$product->id}})">
                @csrf
                <button class="wishList addToWishList" >
                <div>
                <i class="fa-regular fa-heart " onclick="myFunction(this)"></i>
                </div>

                </button>

            </form>

        </div>
        @endforeach


    </div>
</section>

