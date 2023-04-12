<h1>Brands:</h1>
@foreach($brand as $B)
<h3>id :: {{$B->id}}</h3><br>
<h3>Brand Name::{{$B->name}}</h3><br>
<h3>Brand image::{{$B->image}}</h3><br>
<a href="{{route('brand.edit',$B->id)}}">edit</a><br>
<form method="post" action="{{route('brand.destroy',$B->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>
<h1>-*--*---*--*--*--*--*</h1>
@endforeach