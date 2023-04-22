
{{--<link rel="stylesheet" href="/css/catCss.css" />--}}

{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6 text-center mb-5">--}}
{{--                <h2 class="heading-section">displaying employee </h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="table-wrap">--}}
{{--                    <table class="table table-striped">--}}
{{--                        <thead class="thead-dark">--}}
{{--                        <tr>--}}
{{--                            <th>ID NO</th>--}}
{{--                            <th>Employee Name</th>--}}
{{--                            <th>Employee email</th>--}}
{{--                            <th>Password</th>--}}
{{--                            <th>National_Id</th>--}}
{{--                            <th>image</th>--}}
{{--                            <th>Address</th>--}}
{{--                            <th>phone number</th>--}}
{{--                            <th>Operations</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach( $employee as $emp)--}}
{{--                            <tr>--}}
{{--                                <th scope="row">{{$emp->id}}</th>--}}
{{--                                <td>{{$emp->name}}</td>--}}
{{--                                <td>{{$emp->email}}</td>--}}
{{--                                <td>{{$emp->password}}</td>--}}
{{--                                <td>{{$emp->nat_id}}</td>--}}
{{--                                <td><a href="#" class="btn ">{{$emp->image}}</a></td>--}}
{{--                                <td>{{$emp->address}}</td>--}}
{{--                                <td>{{$emp->phone_num}}</td>--}}
{{--                                <td class="operations">--}}
{{--                                    <a href="{{route('employee.edit',$emp->id)}}" class="delete edit">edit</a>--}}

{{--                                    <form method="post" action="{{route('employee.destroy',$emp->id)}}">--}}
{{--                                        @csrf--}}
{{--                                        @method('delete')--}}
{{--                                        <button type='submit' class="delete">delete</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
                @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
    {!! $roles->render() !!}
    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection
