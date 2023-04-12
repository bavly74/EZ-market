<h1>hello from Category Display</h1>
<h1>Categories:</h1>
@foreach($cats as $cat)
<h3>catname :: {{$cat->name}}</h3><br>
<h3>status::{{$cat->status}}</h3><br>
<h3>parent::{{$cat->Cat_parent}}</h3><br>
<a href="{{route('category.edit',$cat->id)}}">edit</a><br>
<form method="post" action="{{route('category.destroy',$cat->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>
<h1>-*--*---*--*--*--*--*</h1>
@endforeach
