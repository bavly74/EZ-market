
@extends('empty')
@section('content')


    <!-- <h1>all products</h1>



    products -->
    <div class="path">
        <h2>Search Results</h2>
    </div>
    <section class="products">
        <!-- filters -->
        <div class="filters-container">
            <!-- search -->
            <form class="input-form" action="{{url('search')}}" method="get">
                <input type="text" name="search" value="" class="search-input" placeholder="search..." />
            </form>
            <!-- categories -->


        </div>
        <!-- products -->
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
                        <form action="{{url('/cart-store')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_ID" value="{{$product->id}}">
                            <button type="submit" disabled style="background: gray" class="add-cart">add to
                                cart</button>
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

                        <form action="{{url('/cart-store')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_ID" value="{{$product->id}}">
                            <button type="submit" class="add-cart">add to cart</button>
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
    </section>
    <script src="./products.js"></script>
    <script src="./category.js"></script>
    </body>
    </html>





@endsection

