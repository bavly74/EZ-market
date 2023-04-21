<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">

    <h1 class="adminHeader">insert employee</h1>
    <form action="{{route('employee.store')}}" method='post'>
        @csrf
        <input type='text' placeholder='Enter employee' name='name' class="adminInput"><br>
        <input type='email' placeholder='Enter your email' name='email' class="adminInput"><br>
        <input type='password' placeholder='Enter password' name='password' class="adminInput"><br>
        <input type='text' placeholder='Enter national id' name='nat_id' class="adminInput"><br>
        <input type='text' placeholder='Enter image' name='image' class="adminInput"><br>
        <input type='text' placeholder='Enter address' name='address' class="adminInput"><br>
        <input type='text' placeholder='Enter phone number' name='phone_num' class="adminInput"><br>
        <button type='submit'>store</button>

    </form>
</div>
