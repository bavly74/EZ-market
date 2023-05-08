<link rel="stylesheet" href="/css/catCss.css" />

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">delivery </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID NO</th>
                                <th>delivery Name</th>
                                <th>delivery image</th>
                                <th>salary type</th>
                                <th>national id</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($delivery as $d)
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <td>{{$d->name}}</td>
                                <td><a href="#" class="btn ">{{$d->image}}</a></td>
                                <td>{{$d->salary_type}}</td>
                                <td>{{$d->Nat_id}}</td>
                                <td class="operations">
                                    <a href="{{route('delivery.edit',$d->id)}}" class="delete edit">edit</a>
                                    <form method="post" action="{{route('delivery.destroy',$d->id)}}">
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
