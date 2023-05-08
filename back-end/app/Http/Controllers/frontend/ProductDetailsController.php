<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    // public function showDetails($id){
    //     $product = Product::find($id);
    //     return view('detail', compact('product'));
    // }


    public function productDetail($id)
    {
        $product = product::where('id', $id)->first();
        if ($product) {
            return view('detail', compact('product'));
        } else {
            return 'product detail not found';
        }
    }
}
