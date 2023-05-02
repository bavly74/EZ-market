@extends('empty')
@section('content')

@foreach ($products as $product)
<p>{{$product->productName}}</p>

@endforeach

@endsection
