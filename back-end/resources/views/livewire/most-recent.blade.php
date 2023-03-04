
<section class="products-section padding-section">
      <h2 class="products-section-before-change">Our most recent products</h2>
      <div class="products-section-row">
@include('layouts.notification')
          @foreach($recentProduct as $product)
              <div class="product">
                  <div class="productImg">
                      <img src="imgs/{{$product->pro_image1}}" alt="" />
                      <img src="imgs/{{$product->pro_image2}}" alt="" />

                  </div>


                  <div class="productInfo">
                      <p>SPORTSWEAR, T-SHIRTS</p>
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
