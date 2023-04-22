<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">

    <h1 class="adminHeader">create inventory</h1>
    <form action="{{route('inventory.store')}}" method="post">
        @csrf
        <label style=" font-weight:700;">choose product</label><br>
        <select name="product_id">
            @foreach($inventory as $in)
            <option value="{{$in->product_id}}">{{$in->product_id}}</option>
            @endforeach
        </select><br>

        <label>product name</label><br>
        <input type="text" placeholder="enter product name" name="pro_name" class="adminInput"><br>
        <label> quantity</label><br>
        <input type="number" placeholder="enter product quantity" name="quantity" class="adminInput"><br>
        <label> product cost</label><br>
        <input type="number" placeholder="enter product cost" name="product_cost" class="adminInput"><br>
        <button type='submit'>store</button>
    </form>
</div>
