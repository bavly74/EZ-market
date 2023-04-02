<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function showDetails($id){
        $product=Product::where('id',$id)->get();
        return view('layouts.details',compact('product'));
    }
}
