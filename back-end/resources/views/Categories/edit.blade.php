<h1>Edit Page</h1>

<form action="{{route('category.update',$cats->id)}}" method="post">
    @csrf
    @method('PUT');

    <input type='text'  name='name' value='{{$cats->name}}'><br><br>

    <input type="checkbox" name="status" value="1">
    <label for="status1">avilable</label><br>
    <input type="checkbox"  name="status" value="0">
    <label for="status2"> Not avilable</label><br>
    <select name="cat_parent" >
        @foreach( $allCat as $cat)
            <option value="{{$cat->id}}" name="cat_parent">{{$cat->name}}</option>
        @endforeach

    </select>
    <button type="submit" >update</button>

</form>
