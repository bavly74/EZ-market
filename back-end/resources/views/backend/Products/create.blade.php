<link rel="stylesheet" href="/css/adminCss.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<a class="goBack" href="{{ route('products.index') }}">
    <i class="fa-solid fa-arrow-left"></i>
    GO BACK
</a>

<div class="center">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row" style="height: 100%">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="adminInput" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                <select name="brand" id="cars">
                    @foreach ($brands as $brand )
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="category" id="cars">
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>product image 1:</strong>
                <input type="text" name="image1" class="adminInput" placeholder="image 1">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>product image 2:</strong>
                <input type="text" name="image2" class="adminInput" placeholder="image 2">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantity:</strong>
                <input type="text" name="quantity" class="adminInput" placeholder="quantity">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status:</strong>
                <select name="status" id="cars">
                    <option value="1">available</option>
                    <option value="0">unavailable</option>
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>most recent:</strong>
                <select name="most_recent" id="cars">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="adminInput" name="description" ></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actual cost:</strong>
                <input class="adminInput" name="cost" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input class="adminInput" name="price" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>offer:</strong>
                <input class="adminInput" name="offer" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

</form>

</div>
