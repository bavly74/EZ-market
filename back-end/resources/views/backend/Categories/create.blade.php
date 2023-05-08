
@extends('backend.layouts.master')
@section('content')

<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">
    <h1 class="adminHeader">create new category</h1>

    <form method='post' action="{{route('category.store')}}">
        @csrf

        <input type='text' placeholder='enter category name' name='name' class="adminInput"><br><br>
        <div class="formLabel">
            <input type="checkbox" name="status" value="1" id="status1">
            <label for="status1">avilable</label><br>
            <input type="checkbox" name="status" value="0" id="status2">
            <label for="status2"> Not avilable</label><br>
        </div>
        <label for="cat_parent" style=" font-weight:700;">Choose a category:</label>
        <select name="cat_parent" id="cars">
            @foreach( $cats as $cat)
            <option value="{{$cat->id}}" name="cat_parent">{{$cat->name}}</option>
            @endforeach

        </select>
        <!-- <input type='number' placeholder='enter id of category parent' name='Cat_parent'><br> -->

        <button type='submit'>store</button>
    </form>
</div>
@endsection