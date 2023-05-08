<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>brands</h2>
        </div>
        <div class="pull-right">
            @can('brand-create')
                <a class="btn btn-success" href="{{ route('brand.create') }}"> Create New Brand</a>
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
    @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->id}}</td>
            <td>{{ $brand->name }}</td>

            <td>
                <form action="{{ route('brand.destroy',$brand->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('brand.show',$brand->id) }}">Show</a>
                    @can('product-edit')
                        <a class="btn btn-primary" href="{{ route('brand.edit',$brand->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{--{!! $brands->links() !!}--}}
