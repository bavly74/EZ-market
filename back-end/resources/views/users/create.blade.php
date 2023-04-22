{{--<link rel="stylesheet" href="/css/adminCss.css" />--}}
{{--<div class="center">--}}

{{--    <h1 class="adminHeader">insert employee</h1>--}}
{{--    <form action="{{route('employee.store')}}" method='post'>--}}
{{--        @csrf--}}
{{--        <input type='text' placeholder='Enter employee' name='name' class="adminInput"><br>--}}
{{--        <input type='email' placeholder='Enter your email' name='email' class="adminInput"><br>--}}
{{--        <input type='password' placeholder='Enter password' name='password' class="adminInput"><br>--}}
{{--        <input type='text' placeholder='Enter national id' name='nat_id' class="adminInput"><br>--}}
{{--        <input type='text' placeholder='Enter image' name='image' class="adminInput"><br>--}}
{{--        <input type='text' placeholder='Enter address' name='address' class="adminInput"><br>--}}
{{--        <input type='text' placeholder='Enter phone number' name='phone_num' class="adminInput"><br>--}}
{{--        <button type='submit'>store</button>--}}

{{--    </form>--}}
{{--</div>--}}


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
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
    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
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
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>

