<link rel="stylesheet" href="/css/adminCss.css" />


<div class="center">
    <h1 class="adminHeader">create new brand</h1>
    <form action="{{route('brand.store')}}" method='post'>
        @csrf
        <input type='text' placeholder='enter brand name' name='name' class="adminInput"><br><br>
        <button type='submit'>store</button>
    </form>

</div>
