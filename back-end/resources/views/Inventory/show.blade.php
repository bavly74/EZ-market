<h1>show invntory</h1>
 
@foreach($inventory as $in)
<h2> Inventory ID :: {{$in->id}}</h2>
<h3>ProductID:: {{$in->product_id}}</h3>
<h3>Product Name:: {{$in->pro_name}}</h3>
<h3>Quantity:: {{$in->quantity}}</h3>
<h3>Product Cost:: {{$in->product_cost}}</h3>
<a href="{{route('inventory.edit',$in->id)}}">edit</a><br>
<form method="post" action="{{route('inventory.destroy',$in->id)}}">
    @csrf
    @method('delete');
    <button type='submit' >delete</button>
</form>



@endforeach