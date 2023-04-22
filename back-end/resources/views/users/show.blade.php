
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
{{--                            <tr>--}}
{{--                                <th>ID NO</th>--}}
{{--                                <th>Employee Name</th>--}}
{{--                                <th>Employee email</th>--}}
{{--                                <th>Password</th>--}}
{{--                                <th>National_Id</th>--}}
{{--                                <th>image</th>--}}
{{--                                <th>Address</th>--}}
{{--                                <th>phone number</th>--}}
{{--                                <th>Operations</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            @foreach( $employee as $emp)--}}
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
{{--                            @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
