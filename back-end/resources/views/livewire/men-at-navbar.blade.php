{{--<div class="product">--}}
{{--                                <div class="productImg">--}}
{{--                                    <img src="imgs/jogging_top_01-300x300.webp" alt="" />--}}
{{--                                    <img src="imgs/jogging_top_02-300x300.webp" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="productInfo">--}}
{{--                                    <p>SPORTSWEAR, T-SHIRTS</p>--}}
{{--                                    <p><strong> Jogging Top </strong></p>--}}
{{--                                    <span class="price"> <del>$20.00 </del> $15.00 </span>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="add-cart">Add to cart</a>--}}
{{--</div>--}}
     <div class="products-section-row">

@foreach($products as $product)
@if($product->inventory->quantity <1 || $product->status!=1)
        <div class="product">
            <div class="productImg">
                <img src="imgs/{{$product->pro_image1}}" alt="" />
                <img src="imgs/{{$product->pro_image2}}" alt="" />

            </div>

            <div class="productInfo">
                <p>{{$product->brand->name}}</p>
                <p><strong> {{$product->productName}} </strong></p>
                <span class="price"> <del>{{$product->productCost}}$ </del> {{$product->price}}$</span>

                <p style="color:black"><strong>unvailable </strong></p>

            </div>

            <form wire:submit.prevent="addItemToCart({{$product->id}})">
                @csrf

                <button type="button" disabled style="background: gray" type="submit" class="add-cart addToCart">Add
                    to cart</button>
            </form>

            <form wire:submit.prevent="addItemToWishlist({{$product->id}})">
                @csrf
                <button class="wishList addToWishList">
                    <div>
                        <i class="fa-regular fa-heart " onclick="myFunction(this)"></i>
                    </div>

                </button>

            </form>

        </div>

    @else
        <div class="product">
            <a href="{{url('details',$product->id)}}" class="productImg">
                <img src="imgs/{{$product->pro_image1}}" alt="" />
                <img src="imgs/{{$product->pro_image2}}" alt="" />

            </a>

            <div class="productInfo">
                <p>{{$product->brand->name}}</p>
                <p><strong> {{$product->productName}} </strong></p>
                <span class="price"> <del>{{$product->productCost}}$ </del> {{$product->price}}$</span>

                <p style="color:black"><strong>in stock :{{$product->inventory->quantity}} </strong></p>

            </div>

            <form wire:submit.prevent="addItemToCart({{$product->id}})">
                @csrf
                {{--                    <input wire:model="quantity.{{$product->id}}" type="number">--}}
                <button type="submit" class="add-cart addToCart">Add to cart</button>
            </form>

            <form wire:submit.prevent=" addItemToWishlist({{$product->id}})">
                @csrf
                <button class="wishList addToWishList">
                    <div>
                        <i class="fa-regular fa-heart " onclick="myFunction(this)"></i>
                    </div>

                </button>

            </form>

        </div>

    @endif
    @endforeach
</div>
