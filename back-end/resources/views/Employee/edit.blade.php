<h1>hello from edit page</h1>
<form action="{{route('employee.update',$employee->id)}}" method='post'>
    @csrf
    @method('PUT')
    <label>name :</label><br>
    <input type='text'     value="{{$employee->name}}" name='name'><br>
    <label>email :</label><br>
    <input type='email'    value="{{$employee->email}}" name='email'><br>
    <label>password :</label><br>
    <input type='password' value="{{$employee->password}}" name='password'><br>
    <label>nat_id :</label><br>
    <input type='text'     value="{{$employee->nat_id}}" name='nat_id'><br>
    <label>image :</label><br>
    <input type='text'     value="{{$employee->image}}" name='image'><br>
    <label>address :</label><br>
    <input type='text'     value="{{$employee->address}}" name='address'><br>
    <label>phone :</label><br>
    <input type='text'     value="{{$employee->phone_num}}" name='phone_num'><br>
    <button type='submit'>update</button>

</form>
