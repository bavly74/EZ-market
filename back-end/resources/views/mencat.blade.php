@extends('empty')
@section('content')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<div class="container padding-section">
    <h2>Home/Men/</h2>
</div>
<div class="container padding-section">
    <div class="row">
        <div class="col-3">
            <div class="searchSection">
                <form id="search-form">
                    <input type="text" name="search" placeholder="Search products...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass "></i></button>
                </form>
            </div>
            @foreach($parentCategories as $category)
            <h3>{{$category->name}}</h3>
            @foreach ($category->children as $subcategory)
            <!-- Subcategory -->
            <a href="{{ url('/products/' . $category->name . '/' . $subcategory->name) }}">
                {{ $subcategory->name }}
            </a>
            <br>
            @endforeach
            @endforeach

        </div>
        <div class="col-9 ">
            <div id="product-list" class="products-section-row">
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
                            <p style="color:black"><strong>in stock: {{$product->inventory->quantity}} </strong></p>
                        </div>

                        <form action="{{url('/cart-store')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_ID" value="{{$product->id}}">
                            <button type="submit" class="add-cart">add to cart</button>
                        </form>
                    </div>
                    @endif
                    @endforeach
            </div>

        </div>
    </div>
</div>



<script>
$('#search-form').on('submit', function(e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        type: "GET",
        url: "{{ route('menaction') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: form.serialize(),
        success: function(response) {
            var products = $('#product-list');

            products.empty();
            $.each(response, function(index, product) {

                var item = '<div class="product">';
                item += '<div class="productImg">';
                item += '<img src="imgs/' + product.pro_image1 + '" alt="" />';
                item += '<img src="imgs/' + product.pro_image2 + '" alt="" />';
                item += '</div>';
                item += '<div class="productInfo">';

                item += '<p>' + product.brand.name + '</p>';

                item += '<strong>' + product.productName + '</strong>';

                item += '<p>' + '$' + product.price + '</p>';

                item += '<strong>' + 'in stock: ' + product.inventory.quantity +
                '</strong>';

                item += '</div>';

                var form = $('<form>');
                form.attr('method', 'post');
                form.attr('action', '/cart-store');

                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var csrfInput = $('<input>').attr({
                    type: 'hidden',
                    name: '_token',
                    value: csrfToken
                });

                var hiddenInput = $('<input>').attr({
                    type: 'hidden',
                    name: 'product_ID',
                    value: product.id
                });

                var submitButton = $('<button class="add-cart">').attr({
                    type: 'submit'
                }).text('add to cart');

                form.append(csrfInput);
                form.append(hiddenInput);
                form.append(submitButton);

                item += form[0].outerHTML;
                item += '</div>';

                products.append(item);
            });
        },
        error: function(xhr) {
            alert('Error searching products');
        }
    });
});
</script>


<script src="path/to/other/library.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var $j = jQuery.noConflict();
// Use $j instead of $ for jQuery code
</script>
@endsection
