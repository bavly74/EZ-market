<h1>create new delivery man</h1>
<form action="{{route('delivery.store')}}" method='post'>
    @csrf
    <input type='text' placeholder='enter  name' name='name'><br><br>
    <input type='text' placeholder='enter  image' name='image'><br><br>
    <input type='text' placeholder='enter  salary type' name='salary_type'><br><br>
    <input type='text' placeholder='enter  national id' name='Nat_id'><br><br>
    <button type='submit' >store</button>
   

</form>