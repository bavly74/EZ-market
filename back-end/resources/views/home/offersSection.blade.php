{{--<section class="products-section padding-section">--}}
{{--    <h2 class="products-section-before">OFFERS</h2>--}}
{{--    <div class="products-section-row">--}}
{{--        @foreach($products as $product)--}}
{{--        <div class="product">--}}
{{--            <div class="productImg">--}}
{{--                <img src="imgs/{{$product->productImage}}" alt="" />--}}
{{--                <img src="imgs/{{$product->productImage2}}" alt="" />--}}
{{--            </div>--}}
{{--            <div class="productInfo">--}}
{{--                <p>SPORTSWEAR, T-SHIRTS</p>--}}
{{--                <p><strong> {{$product->productName  }} </strong></p>--}}
{{--                <span class="price"> <del>{{$product->productCost}} </del> {{$product->productActualCost}} </span>--}}
{{--            </div>--}}
{{--            <form action="{{route('cart.store')}}" method="POST">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="product_ID" value="{{$product->id}}">--}}
{{--                <input type="number" value="1" name="quantity">--}}
{{--                <button type="submit"  class="add-cart">Add to cart</button>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</section>--}}
<section class="products-section padding-section">
    <h2 class="products-section-before">OFFERS</h2>
@livewire('product-table')
</section>
