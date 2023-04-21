<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">
    <h1 class="adminHeader">edit inventory</h1>
    <form action="{{route('inventory.update',$inventory->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>product name</label><br>
        <input type="text" value="{{$inventory->pro_name}}" name="pro_name" class="adminInput"><br>
        <label> quantity</label><br>
        <input type="number" value="{{$inventory->quantity}}" name="quantity" class="adminInput"><br>
        <label> product cost</label><br>
        <input type="number" value="{{$inventory->product_cost}}" name="product_cost" class="adminInput"><br>
        <button type='submit'>update</button>
    </form>
</div>
