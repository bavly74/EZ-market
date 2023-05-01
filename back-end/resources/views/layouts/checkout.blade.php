@extends('empty')
@section('title')
checkout
@endsection
@section('content')
   <div class="container mt-5">
     <form action=" {{url('place-order')}}" method="post">
         {{csrf_field()}}
       <div class="row checkout-form">
           <div class="col-md-7">
               <div class="card">
                   <div class="card-body">
                       <h6> basic details </h6>
                       <hr>
                       <div class="row-checkout-form">
                           <div class="col-md-6 mt-3">
                               <label for=""> First Name      </label>
                               <input type="text" class="form-control"   value="{{ Auth::user()->name }}"  name="fname"  placeholder="Enter First Name ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Last Name      </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->lname }}"   name="lname" placeholder="Enter Last Name ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Email      </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->email }}"  name="email" placeholder="Enter Email ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Phone Number     </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone Number ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Address 1 </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->address }}" name="address"  placeholder="Enter Address 1 ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Address 2    </label>
                               <input type="text" class="form-control" value="{{ Auth::user()->address2 }}"  name="address2" placeholder="Enter Address 2 ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> City    </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->city }}"  name="city" placeholder="Enter City">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> state    </label>
                               <input type="text" class="form-control" value="{{ Auth::user()->state }}"  name="state" placeholder="Enter State ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> country    </label>
                               <input type="text" class="form-control" value="{{ Auth::user()->country }}"  name="country"  placeholder="Enter country ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> pin code    </label>
                               <input type="text" class="form-control"  value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter pin code  ">
                               <div class="col-md-6 mt-3">
                                   <label for=""> status    </label>
                                   <input type="text" class="form-control"   value="{{ Auth::user()->status }}" name="status" placeholder="Enter Status">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-5">
               <div class="card">
                   <div class="card-body">
                       <h6>Order Details</h6>
                       <hr>
                       <table class=" table table-striped table-bordered "  >
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
                       <button  type="submit" class="btn-btn-primary float-end">place order </button>
                   </div>
               </div>
           </div>
       </div>
   </form>
   </div>
    @endsection

<div class="row  padding-section">
      <div class="col-75">
        <div class="container container-checkout">
          <form action="/action_page.php">
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"> <i class="fa fa-user"></i>Full Name</label>
                <input
                class="inputText"
                  type="text"
                  id="fname"
                  name="Firstname"
                  placeholder="Ahmed"
                />

                <label for="email"> <i class="fa fa-envelope"></i>Email</label>
                <input
                class="inputText"
                  type="text"
                  id="email"
                  name="email"
                  placeholder="Ahmed@example.com"
                />

                <label for="adr">
                  <i class="fa fa-address-card-o"></i>Address</label
                >
                <input
                class="inputText"
                  type="text"
                  id="adr"
                  name="Address"
                  placeholder="Somewhere Street"
                />

                <label for="City">
                  <i class="fa fa-institution"></i>Address</label
                >

                <input type="text"
                class="inputText"id="City" name="City" placeholder="Cairo" />
                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input
                    class="inputText"
                      type="text"
                      id="State"
                      name="State"
                      placeholder="NY"
                    />

                    <div class="row">
                      <div class="col-50">
                        <label for="zip">Zip</label>
                        <input
                        class="inputText"
                          type="text"
                          id="zip"
                          name="Zip"
                          placeholder="11389"
                        />

                        <div class="col-50">
                          <h3>Payment</h3>
                          <label for="fname">Accepted Cards</label>
                          <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color: navy"></i>
                            <i class="fa fa-cc-amex" style="color: blue"></i>
                            <i
                              class="fa fa-cc-mastercard"
                              style="color: red"
                            ></i>
                            <i
                              class="fa fa-cc-discover"
                              style="color: orange"
                            ></i>
                          </div>
                          <label for="cname">Name on Card</label>
                          <input
                          class="inputText"
                            type="text"
                            id="cname"
                            name="cardname"
                            placeholder="Ahmed Mohamed Ali"
                          />

                          <label for="ccnum">Credit Card Number</label>
                          <input
                          class="inputText"
                            type="text"
                            id="ccnum"
                            name="cardnumber"
                            placeholder="xxxx-xxxx-xxxx-xxxx"
                          />

                          <label for="expmonth">Expier Month</label>
                          <input
                          class="inputText"
                            type="text"
                            id="expmonth"
                            name="expmonth"
                            placeholder="March"
                          />

                          <div class="row">
                            <div class="col-50">
                              <label for="expyear">Expier Year</label>
                              <input
                              class="inputText"
                                type="text"
                                id="expyear"
                                name="expyear"
                                placeholder="2023"
                              />
                            </div>

                            <div class="col-50">
                              <label for="cvv">Cvv</label>
                              <input
                              class="inputText"
                                type="text"
                                id="cvv"
                                name="cvv"
                                placeholder="356"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <label for="billing">
                    <input
                        type="checkbox"
                        checked="checked"
                        name="sameadr"
                        id="billing"
                      />
                      Shipping Address same as Billing
                    </label>
                    <input
                      type="submit"
                      value="Continue to Checkout"
                      class="bttn"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-25">
        <div class="container container-checkout">
          <h4>
            Cart
            <span class="price" style="color: black">
              <i class="fa fa-shopping-cart"></i> <b>4</b>
            </span>
          </h4>
          <p><a href="#">Product 01</a> <span class="price">$100</span></p>
          <p><a href="#">Product 02</a> <span class="price">$50</span></p>
          <p><a href="#">Product 03</a> <span class="price">$25</span></p>
          <p><a href="#">Product 04</a> <span class="price">$10</span></p>
          <hr />
          <p>
            Total <span class="price" style="color: black"> <b>$185</b> </span>
          </p>
        </div>
      </div>
    </div>
@endsection

