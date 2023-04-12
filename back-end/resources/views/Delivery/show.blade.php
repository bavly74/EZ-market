<h1>delivery men:</h1>
@foreach($delivery as $d)
<h3>id :: {{$d->id}}</h3><br>
<h3> Name::{{$d->name}}</h3><br>
<h3> image::{{$d->image}}</h3><br>
<h3>salary typr::{{$d->salary_type}}</h3><br>
<h3>national id::{{$d->Nat_id}}</h3><br>
<a href="{{route('delivery.edit',$d->id)}}">edit</a><br>
<form method="post" action="{{route('delivery.destroy',$d->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>


<h1>-*--*---*--*--*--*--*</h1>
@endforeach