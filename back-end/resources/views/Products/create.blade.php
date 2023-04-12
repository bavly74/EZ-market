<h1>create product</h1>
<form method='post' action="{{route('product.store')}}">
    @csrf
   
    <input type='text' placeholder='enter product name' name='productName'><br><br>
    <label>product  first image</label><br>
    <input type='text' placeholder='enter product image1' name='pro_image1'><br><br>
    <label>product  second image</label><br>
    <input type='text' placeholder='enter product image2' name='pro_image2'><br><br>
    <label>product discription</label><br>
    <input type='text' placeholder='enter product description' name='description'><br><br>
    <label>product price</label><br>
    <input type='number' placeholder='enter product price' name='price'><br><br>
    <label>product offer</label><br>
    <input type='number' placeholder='enter product offer' name='offer'><br><br>
    <label>product  avg_price</label><br>
    <input type='number' placeholder='enter product offer' name='avg_price'><br><br>
    <label>is avilable??</label><br>
    <input type="checkbox" name="status" value="1">
    <label for="status1">avilable</label><br>
    <input type="checkbox"  name="status" value="0">
    <label for="status2"> Not avilable</label><br><br>

   
    <label>choose brand</label>
    <select name="brand_id" >
    @foreach( $product as $pro)
    <option value="{{$pro->id}}" name="cat_parent">{{$pro->brand->name}}</option>
    @endforeach
   
   
  </select>
  <br><br>
  <label>most recent??</label><br>
  <input type="checkbox" name="most_recent" value="1">
    <label for="status1">new</label><br>
    <input type="checkbox"  name="most_recent" value="0">
    <label for="status2"> old</label><br><br>
 
  <label>choose category</label>
  <select name="cat_id" >
  @foreach( $product as $pro)
    <option value="{{$pro->cat_id}}" name="category">{{$pro->cat->name}}</option>
    @endforeach
   
  </select>
  <br>




   
  
    <!-- <input type='number' placeholder='enter id of category parent' name='Cat_parent'><br> -->

    <button type='submit' >store</button>
</form>