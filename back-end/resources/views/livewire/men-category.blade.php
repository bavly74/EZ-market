@livewireStyles
    @extends('empty')
    @section('content')


        <!-- <h1>all products</h1>-->


        <div class="path">
            <h2>Home/Men/</h2>
        </div>
        <section class="products">
            <!-- filters -->
            <div class="filters-container">
                <!-- search -->
                <form class="input-form">
                    <input type="text" class="search-input" placeholder="search..." />
                </form>
                <!-- categories -->
                <h3>Men</h3>
                <div class="categories">
                    <button class="category-btn">all</button>
                    <!-- <button class="category-btn">
                      Sweatshirts ShirtsSale Sportswear T-Shirts4
                    </button> -->
                </div>
            </div>
            <!-- products -->
            <div class="products-section-row">
                <!-- single product -->
                @foreach($menProducts as $product)
{{--                    <div class="product">--}}
{{--                        <div class="productImg">--}}
{{--                            <img src="imgs/{{$product->pro_image1}}" alt="" />--}}
{{--                            <img src="imgs/{{$product->pro_image2}}" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="productInfo">--}}

{{--                            <p><strong> {{$product->brand->name}}</strong></p>--}}
{{--                            <p>{{$product->productName}}</p>--}}

{{--                            <span class="price"> <del>{{$product->price}} </del> {{$product->offer}}</span>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="add-cart">Add to Cart:----</a>--}}
{{--                    </div>--}}

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

                            <form  wire:submit.prevent="addItemToCart({{$product->id}})">
                                @csrf

                                <button type="button" disabled style="background: gray"  type="submit" class="add-cart addToCart" >Add to cart</button>
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
                    @else
                        <div class="product">
                            <div class="productImg">
                                <img src="imgs/{{$product->pro_image1}}" alt="" />
                                <img src="imgs/{{$product->pro_image2}}" alt="" />

                            </div>

                            <div class="productInfo">
                                <p>{{$product->brand->name}}</p>
                                <p><strong> {{$product->productName}} </strong></p>
                                <span class="price"> <del>{{$product->productCost}}$ </del> {{$product->price}}$</span>

                                <p style="color:black"><strong>in stock :{{$product->inventory->quantity}} </strong></p>

                            </div>

                            <form wire:submit.prevent="addItemToCart({{$product->id}})">
                                @csrf
                                {{--                    <input wire:model="quantity.{{$product->id}}" type="number">--}}
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
                    @endif


                @endforeach


            </div>

        <script src="js/products.js"></script>
        <script src="js/category.js"></script>

        </section>
    @endsection

@livewireScripts
