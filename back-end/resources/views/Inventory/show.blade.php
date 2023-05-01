<link rel="stylesheet" href="/css/catCss.css" />

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">show invntory </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Inventory ID</th>
                                <th>ProductID</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Product Cost</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventory as $in)
                            <tr>
                                <th scope="row">{{$in->id}}</th>
                                <td>{{$in->product_id}}</td>
                                <td>{{$in->pro_name}}</td>
                                <td>{{$in->quantity}}</td>
                                <td>{{$emp->nat_id}}</td>
                                <td>{{$in->product_cost}}</td>
                                <td class="operations">
                                    <a href="{{route('inventory.edit',$in->id)}}" class="delete edit">edit</a>

                                    <form method="post" action="{{route('inventory.destroy',$in->id)}}">
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
