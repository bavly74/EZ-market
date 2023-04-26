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

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand as $B)
                            <tr>
                                <th scope="row">{{$B->id}}</th>
                                <td>{{$B->name}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
