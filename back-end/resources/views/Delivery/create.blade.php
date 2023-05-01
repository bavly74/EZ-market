<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">

    <h1 class="adminHeader">create new delivery man</h1>
    <form action="{{route('delivery.store')}}" method='post'>
        @csrf
        <input type='text' placeholder='enter  name' name='name' class="adminInput"><br><br>
        <input type='text' placeholder='enter  image' name='image' class="adminInput"><br><br>
        <input type='text' placeholder='enter  salary type' name='salary_type' class="adminInput" ><br><br>
        <input type='text' placeholder='enter  national id' name='Nat_id' class="adminInput"><br><br>
        <button type='submit'>store</button>
    </form>
</div>
