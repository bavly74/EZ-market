<h1>show page</h1>
@foreach( $product as $pro)
<h1>ID : {{$pro->id}}</h1><br>
<h2>product Name::{{$pro->productName}}</h2><br>
<h2>image::{{$pro->pro_image1}}</h2><br>
<h2>image2::{{$pro->pro_image2}}</h2><br>
<h2>status::{{$pro->status}}</h2><br>
<h2>variations::{{$pro->variations}}</h2><br>
<h2>description::{{$pro->description}}</h2><br>
<h2>most recent::{{$pro->most_recent}}</h2><br>
<h2>offer::{{$pro->offer}}</h2><br>
<h2> price::{{$pro->price}}</h2><br>
<h2> avarage price::{{$pro->avg_price}}</h2><br>
<a href="{{route('product.edit',$pro->id)}}">edit</a><br>
<form method="post" action="{{route('product.destroy',$pro->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>


<h1>-------------------------*-------------------------</h1>



@endforeach