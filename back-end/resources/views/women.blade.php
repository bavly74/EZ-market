{{--@extends('empty')--}}
{{--@section('content')--}}
{{--    <!-- <h1>all products</h1>--}}
{{--    <-- products -->--}}
{{--    <div class="path">--}}
{{--        <h2>Home/Kids/</h2>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <input type="text" name="search" id="search" class="form-control" placeholder="Search product Data" />--}}
{{--    </div>--}}
{{--    <div class="products">--}}
{{--        <!-- filters -->--}}

{{--        <div class="filters-container">--}}

{{--            <!-- search -->--}}
{{--            <form class="input-form">--}}
{{--                <input type="text" class="search-input" placeholder="search..." />--}}
{{--            </form>--}}

{{--            <!-- categories -->--}}
{{--            <h3>Kids</h3>--}}
{{--            <div class="categories">--}}
{{--                <button class="category-btn">all</button>--}}
{{--                <!-- <button class="category-btn">--}}
{{--                  Sweatshirts ShirtsSale Sportswear T-Shirts4--}}
{{--                </button> -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- products -->--}}
{{--        --}}{{--      <div class="products-section-row">--}}
{{--        --}}{{--        <!-- single product -->--}}
{{--        --}}{{--        @foreach($pro as $po)--}}
{{--        --}}{{--        <div class="product">--}}
{{--        --}}{{--          <div class="productImg">--}}
{{--        --}}{{--            <img src="{{$po->pro_image1}}" alt="" />--}}
{{--        --}}{{--            <img src="{{$po->pro_image2}}" alt="" />--}}
{{--        --}}{{--          </div>--}}
{{--        --}}{{--          <div class="productInfo">--}}

{{--        --}}{{--            <p><strong> {{$po->brand->name}}</strong></p>--}}
{{--        --}}{{--            <p>{{$po->productName}}</p>--}}

{{--        --}}{{--            <span class="price"> <del>{{$po->price}} </del> {{$po->offer}}</span>--}}
{{--        --}}{{--          </div>--}}
{{--        --}}{{--          <a href="#" class="add-cart">Add to Cart:----</a>--}}
{{--        --}}{{--        </div>--}}
{{--        --}}{{--        @endforeach--}}
{{--        --}}{{--      </div>--}}
{{--    </div>--}}


{{--@endsection--}}


{{--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />--}}




{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}


{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $('#search').on('keyup',function(){--}}
{{--            var query= $(this).val();--}}
{{--            $.ajax({--}}
{{--                url:"search",--}}
{{--                type:"GET",--}}
{{--                data:{'search':query},--}}
{{--                success:function(data){--}}
{{--                    $('#search_list').html(data);--}}
{{--                }--}}
{{--            });--}}
{{--            //end of ajax call--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function(){--}}

{{--        fetch_product_data();--}}

{{--        function fetch_product_data(query = '')--}}
{{--        {--}}
{{--            $.ajax({--}}
{{--                url:"{{ route('womenaction') }}",--}}
{{--                method:'GET',--}}
{{--                data:{query:query},--}}
{{--                dataType:'json',--}}
{{--                success:function(data)--}}
{{--                {--}}
{{--                    $('div.products').html(data.table_data);--}}
{{--                    $('#total_records').text(data.total_data);--}}
{{--                }--}}
{{--            })--}}
{{--        }--}}

{{--        $(document).on('keyup', '#search', function(){--}}
{{--            var query = $(this).val();--}}
{{--            fetch_product_data(query);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}




{{--@include('links')--}}
{{--@include('layouts.navbar-with-sign-in')--}}
{{--@include('layouts.category')--}}
@extends('empty')
@section('content')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>


<form id="search-form">
    <input type="text" name="search" placeholder="Search products...">
    <button type="submit">Search</button>
</form>

<ul id="product-list">
    @foreach($products as $product)
        <li>{{ $product->productName }}</li>
        <li>{{ $product->price }}</li>

        <form action="{{url('/cart-store')}}" method="post">
            @csrf
            <input type="hidden" name="product_ID" value="{{$product->id}}">
            <button type="submit">add to cart</button>
        </form>
    @endforeach
</ul>

<script>
    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: "GET",
            url: "{{ route('womenaction') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: form.serialize(),
            success: function(response) {
                var products = $('#product-list');
                products.empty();
                $.each(response, function(index, product) {
                    products.append('<li>' + product.productName + '</li>');
                    products.append('<li>' + product.price + '</li>');

                    var form = $('<form>');
                    form.attr('method', 'post');
                    form.attr('action', 'cart-store');

                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    var csrfInput = $('<input>').attr({
                        type: 'hidden',
                        name: '_token',
                        value: csrfToken
                    });

                    var hiddenInput = $('<input>').attr({
                        type: 'hidden',
                        name: 'product_ID',
                        value: '{{$product->id}}'
                    });



                    var submitButton = $('<button>').attr({
                        type: 'submit'
                    }).text('add to cart');

                    form.append(csrfInput);

                    form.append(hiddenInput);

                    form.append(submitButton);

                    products.append(form);

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
