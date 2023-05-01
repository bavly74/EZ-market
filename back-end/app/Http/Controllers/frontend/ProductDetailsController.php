<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function showDetails($id){
        $product = Product::find($id);
        return view('detail', compact('product'));
    }
}
