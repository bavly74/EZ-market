@extends('empty')
@section('content')
    <!-- <h1>all products</h1>
    <-- products -->
    <div class="path">
        <h2>Home/Kids/</h2>
    </div>
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search product Data" />
    </div>
    <div class="products">
        <!-- filters -->

        <div class="filters-container">

            <!-- search -->
{{--            <form class="input-form">--}}
{{--                <input type="text" class="search-input" placeholder="search..." />--}}
{{--            </form>--}}

            <!-- categories -->
            <h3>Kids</h3>
            <div class="categories">
                <button class="category-btn">all</button>
                <!-- <button class="category-btn">
                  Sweatshirts ShirtsSale Sportswear T-Shirts4
                </button> -->
            </div>
        </div>
        <!-- products -->
        {{--      <div class="products-section-row">--}}
        {{--        <!-- single product -->--}}
        {{--        @foreach($pro as $po)--}}
        {{--        <div class="product">--}}
        {{--          <div class="productImg">--}}
        {{--            <img src="{{$po->pro_image1}}" alt="" />--}}
        {{--            <img src="{{$po->pro_image2}}" alt="" />--}}
        {{--          </div>--}}
        {{--          <div class="productInfo">--}}

        {{--            <p><strong> {{$po->brand->name}}</strong></p>--}}
        {{--            <p>{{$po->productName}}</p>--}}

        {{--            <span class="price"> <del>{{$po->price}} </del> {{$po->offer}}</span>--}}
        {{--          </div>--}}
        {{--          <a href="#" class="add-cart">Add to Cart:----</a>--}}
        {{--        </div>--}}
        {{--        @endforeach--}}
        {{--      </div>--}}
    </div>
    <script src="./products.js"></script>
    <script src="./category.js"></script>
    </body>
    </html>
@endsection


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var query= $(this).val();
            $.ajax({
                url:"search",
                type:"GET",
                data:{'search':query},
                success:function(data){
                    $('#search_list').html(data);
                }
            });
            //end of ajax call
        });
    });

</script>
<script>
    $(document).ready(function(){

        fetch_product_data();

        function fetch_product_data(query = '')
        {
            $.ajax({
                url:"{{ route('womenaction') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('div.products').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_product_data(query);
        });
    });
</script>