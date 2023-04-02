@extends('empty')
@section('content')

<div class="path">
    <h2>Home/Men/</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search product Data" />
            </div>
        </div>
        <div class="col-9">
            <div class="products-section-row">
                <div class="products"></div>
            </div>
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



<<<<<<< HEAD
        {{--            <span class="price"> <del>{{$po->price}} </del> {{$po->offer}}</span>--}}
        {{--          </div>--}}
        {{--          <a href="#" class="add-cart">Add to Cart:----</a>--}}
        {{--        </div>--}}
        {{--        @endforeach--}}
        {{--      </div>--}}
    </div>
    <script src="./products.js"></script>
    <script src="./category.js"></script>


=======
>>>>>>> refs/remotes/origin/main
{{--            <span class="price"> <del>{{$po->price}} </del> {{$po->offer}}</span>--}}
{{--          </div>--}}
{{--          <a href="#" class="add-cart">Add to Cart:----</a>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--      </div>--}}

@endsection


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>


<script>
$(document).ready(function() {
    $('#search').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: "search",
            type: "GET",
            data: {
                'search': query
            },
            success: function(data) {
                $('#search_list').html(data);
            }
        });
        //end of ajax call
    });
});
</script>
<script>
$(document).ready(function() {

    fetch_product_data();


<<<<<<< HEAD
        function fetch_product_data(query = '')
        {
            $.ajax({
                url:"{{ route('menaction') }}",
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


=======
    function fetch_product_data(query = '') {
        $.ajax({
            url: "{{ route('menaction') }}",
            method: 'GET',
            data: {
                query: query
            },
            dataType: 'json',
            success: function(data) {
                $('div.products').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }
>>>>>>> refs/remotes/origin/main



    $(document).on('keyup', '#search', function() {
        var query = $(this).val();
        fetch_product_data(query);
    });
});
</script>
