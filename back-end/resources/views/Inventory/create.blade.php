<h1>create inventory</h1>
<form action="{{route('inventory.store')}}" method="post">
    @csrf
<label>choose product</label><br>
    <select name="product_id">
        @foreach($inventory as $in)
        <option value="{{$in->product_id}}">{{$in->product_id}}</option>
        @endforeach
    </select><br>

    <label>product name</label><br>
    <input type="text" placeholder="enter product name" name="pro_name"><br>
    <label> quantity</label><br>
    <input type="number" placeholder="enter product quantity" name="quantity"><br>
    <label> product cost</label><br>
    <input type="number" placeholder="enter product cost" name="product_cost"><br>
    <button type='submit'>store</button>
    </form>