<link rel="stylesheet" href="/css/catCss.css" />



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Brands</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID NO</th>
                                <th>Brand Name</th>
                                <th>Brand image</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand as $B)
                            <tr>
                                <th scope="row">{{$B->id}}</th>
                                <td>{{$B->name}}</td>
                                <td><a href="#" class="btn ">{{$B->image}}</a></td>
                                <td class="operations">
                                    <a href="{{route('brand.edit',$B->id)}}" class="delete edit">edit</a>
                                    <form method="post" action="{{route('brand.destroy',$B->id)}}">
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
