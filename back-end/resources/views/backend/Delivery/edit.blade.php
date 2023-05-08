<link rel="stylesheet" href="/css/adminCss.css" />

<div class="center">
    <h1 class="adminHeader">edit new delivery</h1>
    <form action="{{route('delivery.update',$delivery->id)}}" method='post'>
        @csrf
        @method('PUT')

        <input type='text' name='name' value='{{$delivery->name}}' class="adminInput"><br><br>
        <input type='text' name='name' value='{{$delivery->image}}' class="adminInput"><br><br>
        <input type='text' name='name' value='{{$delivery->salary_type}}' class="adminInput"><br><br>
        <input type='text' name='name' value='{{$delivery->Nat_id}}' class="adminInput"><br><br>
        <button type='submit'>update</button>
    </form>
</div>
