<h1>insert employee</h1>
<form action="{{route('employee.store')}}" method='post'>
    @csrf
    <input type='text' placeholder='Enter employee' name='name'><br>
    <input type='email' placeholder='Enter your email' name='email'><br>
    <input type='password' placeholder='Enter password' name='password'><br>
    <input type='text' placeholder='Enter national id' name='nat_id'><br>
    <input type='text' placeholder='Enter image' name='image'><br>
    <input type='text' placeholder='Enter address' name='address'><br>
    <input type='text' placeholder='Enter phone number' name='phone_num'><br>
    <button type='submit'>store</button>

</form>