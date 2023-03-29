<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $r){
        if($r->search){
            $products=Product::where('productName','LIKE','%'.$r->search.'%')->latest()->paginate(15);
            return view('layouts.search',compact('products'));

        }else{
            return redirect()->back()->with('message','empty');
        }
    }

}
