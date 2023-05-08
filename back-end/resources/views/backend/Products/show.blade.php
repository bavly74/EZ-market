<link rel="stylesheet" href="/css/adminCss.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<a class="goBack" href="{{ route('products.index') }}">
    <i class="fa-solid fa-arrow-left"></i>
    GO BACK
</a>
<div class="center">
    <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin:10px 0;">
                <strong style="margin-right:10px;">Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin:10px 0;">
                <strong style="margin-right:10px;">Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
</div>
