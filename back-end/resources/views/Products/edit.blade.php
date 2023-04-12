<h2>edit page</h2>
<h1>create product</h1>
<form method='post' action="{{route('product.update',$product->id)}}">
    @csrf
    @method('Put')
   
    <input type='text'  value="{{$product->productName}}" name='productName'><br><br>
    <label>product  first image</label><br>
    <input type='text' value="{{$product->pro_image1}}" name='pro_image1'><br><br>
    <label>product  second image</label><br>
    <input type='text' value="{{$product->pro_image2}}" name='pro_image2'><br><br>
    <label>product discription</label><br>
    <input type='text' value="{{$product->description}}" name='description'><br><br>
    <label>product price</label><br>
    <input type='number' value="{{$product->price}}" name='price'><br><br>
    <label>product offer</label><br>
    <input type='number' value="{{$product->offer}}" name='offer'><br><br>
    <label>product  avg_price</label><br>
    <input type='number' value="{{$product->avg_price}}" name='avg_price'><br><br>
    <label>is avilable??</label><br>
    <input type="checkbox" name="status" value="{{$product->status}}">
    <label for="status1">avilable</label><br>
    <input type="checkbox"  name="status" value="{{$product->status}}">
    <label for="status2"> Not avilable</label><br><br><br>
    <label>most recent??</label><br>
  <input type="checkbox" name="most_recent" value="1">
    <label for="status1">new</label><br>
    <input type="checkbox"  name="most_recent" value="0">
    <label for="status2"> old</label><br><br>





   
  
    <!-- <input type='number' placeholder='enter id of category parent' name='Cat_parent'><br> -->

    <button type='submit' >update</button>
</form>