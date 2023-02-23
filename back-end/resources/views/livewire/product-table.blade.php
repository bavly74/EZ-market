<section class="products-section padding-section">
    <h2 class="products-section-before">OFFERS</h2>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="products-section-row">
        @foreach($products as $product)
            <div class="product">
                <div class="productImg">
                    <img src="imgs/{{$product->productImage}}" alt="" />
                    <img src="imgs/{{$product->productImage2}}" alt="" />
                </div>
                <div class="productInfo">
                    <p>SPORTSWEAR, T-SHIRTS</p>
                    <p><strong> {{$product->productName}} </strong></p>
                    <span class="price"> <del>{{$product->productCost}}$ </del> {{$product->productActualCost}}$</span>
                </div>

                <form wire:submit.prevent="add({{$product->id}})" >
                    @csrf
                    <input wire:model="quantity.{{$product->id}}" type="number">
                    <button type="submit"  class="add-cart" >Add to cart</button>
                </form>

            </div>
        @endforeach


    </div>
</section>

