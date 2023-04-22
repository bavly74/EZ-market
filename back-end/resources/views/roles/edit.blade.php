<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">
    <h1 class="adminHeader">edit employee</h1>
    <form action="{{route('employee.update',$employee->id)}}" method='post'>
        @csrf
        @method('PUT')
        <label>name :</label><br>
        <input type='text' value="{{$employee->name}}" name='name' class="adminInput"><br>
        <label>email :</label><br>
        <input type='email' value="{{$employee->email}}" name='email' class="adminInput"><br>
        <label>password :</label><br>
        <input type='password' value="{{$employee->password}}" name='password' class="adminInput"><br>
        <label>nat_id :</label><br>
        <input type='text' value="{{$employee->nat_id}}" name='nat_id' class="adminInput"><br>
        <label>image :</label><br>
        <input type='text' value="{{$employee->image}}" name='image' class="adminInput"><br>
        <label>address :</label><br>
        <input type='text' value="{{$employee->address}}" name='address' class="adminInput"><br>
        <label>phone :</label><br>
        <input type='text' value="{{$employee->phone_num}}" name='phone_num' class="adminInput"><br>
        <button type='submit'>update</button>
    </form>
</div>
