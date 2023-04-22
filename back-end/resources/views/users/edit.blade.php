{{--<link rel="stylesheet" href="/css/adminCss.css" />--}}
{{--<div class="center">--}}
{{--    <h1 class="adminHeader">edit employee</h1>--}}
{{--    <form action="{{route('employee.update',$employee->id)}}" method='post'>--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}
{{--        <label>name :</label><br>--}}
{{--        <input type='text' value="{{$employee->name}}" name='name' class="adminInput"><br>--}}
{{--        <label>email :</label><br>--}}
{{--        <input type='email' value="{{$employee->email}}" name='email' class="adminInput"><br>--}}
{{--        <label>password :</label><br>--}}
{{--        <input type='password' value="{{$employee->password}}" name='password' class="adminInput"><br>--}}
{{--        <label>nat_id :</label><br>--}}
{{--        <input type='text' value="{{$employee->nat_id}}" name='nat_id' class="adminInput"><br>--}}
{{--        <label>image :</label><br>--}}
{{--        <input type='text' value="{{$employee->image}}" name='image' class="adminInput"><br>--}}
{{--        <label>address :</label><br>--}}
{{--        <input type='text' value="{{$employee->address}}" name='address' class="adminInput"><br>--}}
{{--        <label>phone :</label><br>--}}
{{--        <input type='text' value="{{$employee->phone_num}}" name='phone_num' class="adminInput"><br>--}}
{{--        <button type='submit'>update</button>--}}
{{--    </form>--}}
{{--</div>--}}



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
