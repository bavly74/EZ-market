<link rel="stylesheet" href="/css/adminCss.css" />

<div class="center">
    <h1 class="adminHeader">edit  brand</h1>
    <form action="{{route('brand.update',$brand->id)}}" method='post'>
        @csrf
        @method('PUT')

        <input type='text' name='name' value='{{$brand->name}}' class="adminInput"><br><br>
        <button type='submit'>update</button>
    </form>

</div>
