@extends('empty')
@section('title')
checkout
@endsection
@section('content')
<div class="container my-5">
    <form action=" {{url('place-order')}}" method="post">
        {{csrf_field()}}
        <div class="row checkout-form">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6> basic details </h6>
                        <hr>
                        <div class="row-checkout-form">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for=""> First Name </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                        name="fname" placeholder="Enter First Name ">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Last Name </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->lname }}"
                                        name="lname" placeholder="Enter Last Name ">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for=""> Email </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                        name="email" placeholder="Enter Email ">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Phone Number </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}"
                                        name="phone" placeholder="Enter Phone Number ">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mt-3">
                                    <label for=""> Address 1 </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address }}"
                                        name="address" placeholder="Enter Address 1 ">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Address 2 </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address2 }}"
                                        name="address2" placeholder="Enter Address 2 ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for=""> City </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city"
                                        placeholder="Enter City">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> state </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->state }}"
                                        name="state" placeholder="Enter State ">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for=""> country </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->country }}"
                                        name="country" placeholder="Enter country ">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> pin code </label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->pincode }}"
                                        name="pincode" placeholder="Enter pin code  ">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> status </label>
                                <input type="text" class="form-control" value="{{ Auth::user()->status }}" name="status"
                                    placeholder="Enter Status">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        <table class=" table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Quantity</th>
                                    <th> Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if(Cart::instance('shopping')->count()>0)
                                @foreach($cartitems as $cart)
                                <tr>
                                    {{--                               <td>{{$cart->id}}</td>--}}
                                    <td> {{$cart->name  }}</td>
                                    <td> {{$cart->qty  }}</td>
                                    <td> {{$cart->price  }}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <hr>
                        <button type="submit" class="btn btn-success float-end">place order </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- @endsection --}}


@endsection
