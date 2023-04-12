h1>edit page</h1>
<h1>edit new brand</h1>
<form action="{{route('delivery.update',$delivery->id)}}" method='post'>
    @csrf    
    @method('PUT');
 
    <input type='text'  name='name' value='{{$delivery->name}}'><br><br>
    <input type='text'  name='name' value='{{$delivery->image}}'><br><br>
    <input type='text'  name='name' value='{{$delivery->salary_type}}'><br><br>
    <input type='text'  name='name' value='{{$delivery->Nat_id}}'><br><br>
    

    <button type='submit' >update</button>
   

</form>