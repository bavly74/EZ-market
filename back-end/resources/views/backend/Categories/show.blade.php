@extends('backend.layouts.master')
@section('content')



<link rel="stylesheet" href="/css/catCss.css" />



<section class="ftco-section">
    <div class="container pl-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Categories</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>catname</th>
                                <th>parent</th>
                                <th>Status</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cats as $cat)
                            <tr>
                                <th scope="row">{{$cat->name}}</th>
                                <td>{{$cat->Cat_parent}}</td>
                                <td><a href="#" class="btn ">{{$cat->status}}</a></td>
                                <td class="operations">
                                    <a href="{{route('category.edit',$cat->id)}}" class="delete edit">edit</a>
                                    <form method="post" action="{{route('category.destroy',$cat->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type='submit' class="delete">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection