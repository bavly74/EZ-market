<h1>edit page</h1>
<h1>edit new brand</h1>
<form action="{{route('brand.update',$brand->id)}}" method='post'>
    @csrf    
    @method('PUT');
 
    <input type='text'  name='name' value='{{$brand->name}}'><br><br>
    <input type='text'  name='image' value='{{$brand->image}}'><br><br>
    <button type='submit' >update</button>
   

</form>