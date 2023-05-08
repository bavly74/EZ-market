@extends('backend.layouts.master')
@section('content')


<link rel="stylesheet" href="/css/adminCss.css" />
<div class="center">


<form action="{{route('category.update',$cats->id)}}" method="post">
    @csrf
    @method('PUT')

    <h1 class="adminHeader">Edit Category</h1>

    <form action="{{route('category.update',$cats->id)}}" method="post">
        @csrf
        @method('PUT')

        <input type='text' name='name' value='{{$cats->name}}' class="adminInput"><br><br>
        <div class="formLabel">
            <input type="checkbox" name="status" value="1" id="status1">
            <label for="status1">avilable</label><br>
            <input type="checkbox" name="status" value="0" id="status2">
            <label for="status2"> Not avilable</label><br>
        </div>

        <select name="cat_parent">
            @foreach( $allCat as $cat)
            <option value="{{$cat->id}}" name="cat_parent">{{$cat->name}}</option>
            @endforeach

        </select>
        <button type="submit">update</button>

    </form>
</div>
@endsection