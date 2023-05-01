
@extends('empty')
@section('title')
       my orders
@endsection
@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-header bg-primary">
               <h4 class="text-white"> Order View
               <a href="{{url('my_orders')}}" class="btn btn-warning  float-end " > Back></a>
               </h4>
        </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order-details">
                        <h4> Shipping Details</h4>
                        <hr>
                        <label for="">First Name</label>
                        <div class="border p-2">{{$orders->fname}}</div>
                        <label for="">Last Name</label>
                        <div class="border p-2">{{$orders->lname}}</div>
                        <label for=""> Email </label>
                        <div class="border p-2">{{$orders->email}}</div>
                        <label for="">contact No.</label>
                        <div class="border p-2">{{$orders->phone}}</div>
                        <label for="">Shipping Address</label>
                        <div class="border p-2">
                            {{$orders->address}},<br>
                            {{$orders->address2}},<br>
                            {{$orders->city}},<br>
                            {{$orders->state}},
                            {{$orders->country}},
                        </div>
                        <label for="">Zip code</label>
                        <div class="border p-2">{{$orders->pincode}}</div>
                    </div>
                    <div class="col-md-6">
                        <h4> Order  Details</h4>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> Name </th>
                                <th> Quantity </th>
                                <th> Price </th>
                                <th> Image </th>
                                  </tr>
                            </thead>
                            <body>
                            @foreach($orders->orderitems as $item)
                                <tr>
                                    <td> {{$item->products->name}}</td>
                                    <td> {{$item->qty}}</td>
                                    <td> {{$item->price}}</td>
                                    <td>
                                        <img src=" {{asset('https://pixabay.com/photos/tree-sunset-clouds-sky-silhouette-736885/'.$item->products->image)}}" width="50px" alt=" product item ">{{$item->products->name}}</td>
                                </tr>
                            @endforeach
                            </body>
                        </table>
                        <h4 class="p-2"> Grand Total :<span class="float-end"> {{$orders->total_price }} </span></h4>
                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection
