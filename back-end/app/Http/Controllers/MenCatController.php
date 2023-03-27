<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenCatController extends Controller
{
    //
    public function index()
    {
        $products=Product::where('cat_id',2)->get();
        return view('mencat',compact('products'));

    }
}
