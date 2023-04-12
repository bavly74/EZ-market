<h1>edit page</h1>
<form action="{{route('inventory.update',$inventory->id)}}" method="post">
    @csrf
    @method('PUT')


    <label>product name</label><br>
    <input type="text" value="{{$inventory->pro_name}}" name="pro_name"><br>
    <label> quantity</label><br>
    <input type="number" value="{{$inventory->quantity}}" name="quantity"><br>
    <label> product cost</label><br>
    <input type="number" value="{{$inventory->product_cost}}" name="product_cost"><br>
    <button type='submit'>update</button>
    </form>