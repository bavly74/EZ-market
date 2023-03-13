<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class KidsCatController extends Controller
{
    //
    public function index()
    {
        $pro=Product::where('cat_id','1')->get();
        return view('kidscat',compact('pro'));
    }
}
