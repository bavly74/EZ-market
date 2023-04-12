<form method='post' action="{{route('category.store')}}">
    @csrf

    <input type='text' placeholder='enter category name' name='name'><br>
    <input type="checkbox" name="status" value="1">
    <label for="status1">avilable</label><br>
    <input type="checkbox"  name="status" value="0">
    <label for="status2"> Not avilable</label><br>
    <label for="cat_parent">Choose a category:</label>
  <select name="cat_parent" id="cars">
    @foreach( $cats as $cat)
    <option value="{{$cat->id}}" name="cat_parent">{{$cat->name}}</option>
    @endforeach

  </select>
    <!-- <input type='number' placeholder='enter id of category parent' name='Cat_parent'><br> -->

    <button type='submit' >store</button>
</form>
