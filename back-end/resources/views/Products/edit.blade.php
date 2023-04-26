{{--<h2>edit page</h2>--}}
{{--<h1>create product</h1>--}}
{{--<form method='post' action="{{route('product.update',$product->id)}}">--}}
{{--    @csrf--}}
{{--    @method('Put')--}}
{{--   --}}
{{--    <input type='text'  value="{{$product->productName}}" name='productName'><br><br>--}}
{{--    <h3>choose brand name</h3>--}}
{{--    <select name="brand_id" >--}}
{{--    @foreach( $allProduct as $pro)--}}
{{--    <option value="{{$pro->id}}" name="cat_parent">{{$pro->brand->name}}</option>--}}
{{--    @endforeach--}}
{{--   --}}
{{--   --}}
{{--  </select><br><br>--}}
{{--    <label>product  first image</label><br>--}}
{{--    <input type='text' value="{{$product->pro_image1}}" name='pro_image1'><br><br>--}}
{{--    <label>product  second image</label><br>--}}
{{--    <input type='text' value="{{$product->pro_image2}}" name='pro_image2'><br><br>--}}
{{--    <h3>choose category name</h3>--}}
{{--    <select name="cat_id" >--}}
{{--  @foreach( $allProduct as $pro)--}}
{{--    <option value="{{$pro->cat_id}}" name="category">{{$pro->cat->name}}</option>--}}
{{--    @endforeach--}}
{{--   --}}
{{--  </select><br><br>--}}
{{--    <label>product discription</label><br>--}}
{{--    <input type='text' value="{{$product->description}}" name='description'><br><br>--}}
{{--    <label>product price</label><br>--}}
{{--    <input type='number' value="{{$product->price}}" name='price'><br><br>--}}
{{--    <label>product offer</label><br>--}}
{{--    <input type='number' value="{{$product->offer}}" name='offer'><br><br>--}}
{{--    <label>product  avg_price</label><br>--}}
{{--    <input type='number' value="{{$product->avg_price}}" name='avg_price'><br><br>--}}
{{--    <label>is avilable??</label><br>--}}
{{--    <input type="checkbox" name="status" value="{{$product->status}}">--}}
{{--    <label for="status1">avilable</label><br>--}}
{{--    <input type="checkbox"  name="status" value="{{$product->status}}">--}}
{{--    <label for="status2"> Not avilable</label><br><br><br>--}}
{{--    <label>most recent??</label><br>--}}
{{--  <input type="checkbox" name="most_recent" value="1">--}}
{{--    <label for="status1">new</label><br>--}}
{{--    <input type="checkbox"  name="most_recent" value="0">--}}
{{--    <label for="status2"> old</label><br><br>--}}
{{-- --}}
{{-- --}}





{{--   --}}
{{--  --}}
{{--    <!-- <input type='number' placeholder='enter id of category parent' name='Cat_parent'><br> -->--}}

{{--    <button type='submit' >update</button>--}}
{{--</form>--}}



<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
