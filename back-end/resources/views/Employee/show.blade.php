<h1>displaying employee image</h1>
@foreach( $employee as $emp)
<h1>ID : {{$emp->id}}</h1><br>
<h2>Name::{{$emp->name}}</h2><br>
<h2>email::{{$emp->email}}</h2><br>
<h2>Password::{{$emp->password}}</h2><br>
<h2>National_Id::{{$emp->nat_id}}</h2><br>
<h2>image::{{$emp->image}}</h2><br>
<h2>Address::{{$emp->address}}</h2><br>
<h2>phone number::{{$emp->phone_num}}</h2><br>
<a href="{{route('employee.edit',$emp->id)}}">edit</a><br>
<form method="post" action="{{route('employee.destroy',$emp->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>
<h1>-------------------------*-------------------------</h1>



@endforeach