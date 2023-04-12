@extends('empty')
@section('title')
    checkout
@endsection
@section('content')
   <div class="container mt-5">
       <div class="roww">
           <div class="col-md-7">
               <div class="card">
                   <div class="card-body">
                       <h6> basic details </h6>
                       <hr>
                       <div class="row-checkout-form">
                           <div class="col-md-6 mt-3">
                               <label for=""> First Name      </label>
                               <input type="text" class="form-control" placeholder="Enter First Name ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Last Name      </label>
                               <input type="text" class="form-control" placeholder="Enter Last Name ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Email      </label>
                               <input type="text" class="form-control" placeholder="Enter Email ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Phone Number     </label>
                               <input type="text" class="form-control" placeholder="Enter Phone Number ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Address 1 </label>
                               <input type="text" class="form-control" placeholder="Enter Address 1 ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> Address 2    </label>
                               <input type="text" class="form-control" placeholder="Enter Address 2 ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> City    </label>
                               <input type="text" class="form-control" placeholder="Enter City">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> state    </label>
                               <input type="text" class="form-control" placeholder="Enter State ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> country    </label>
                               <input type="text" class="form-control" placeholder="Enter country ">
                           </div><div class="col-md-6 mt-3">
                               <label for=""> pin code    </label>
                               <input type="text" class="form-control" placeholder="Enter pin code  ">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-5">
               <div class="card">
                   <div class="card-body">
                       Order Details
                       <hr>
                       <table table-striped table-bordered >
                           <thead>
                           <tr>
                               <th> Name </th>
                               <th> Quantity</th>
                               <th> Price</th>

                           </tr>
                           </thead>
                       <tbody>
                       @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()>0)
                           @foreach($cartitems as $cart)
                           <tr>
                               <td> {{$cart->name  }}</td>
                               <td> {{$cart->qty  }}</td>
                               <td> {{$cart->price  }}</td>
                           </tr>
                       @endforeach
                           @endif
                       </tbody>
                       </table>
                       <hr>
                       <button class="btn-btn-primary float-end">place order </button>
                   </div>
               </div>
           </div>
       </div>
   </div>
    @endsection
