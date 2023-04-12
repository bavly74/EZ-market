<h1>create new brand</h1>
<form action="{{route('brand.store')}}" method='post'>
    @csrf
    <input type='text' placeholder='enter brand name' name='name'><br><br>
    <input type='text' placeholder='enter brand image' name='image'><br><br>
    <button type='submit' >store</button>
   

</form>