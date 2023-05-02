<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show(){

        return view('welcome');
    }


//     public function allProducts()
//     {

// //        $inventory = Inventory::find(1);
// //foreach ( $inventory->products as $pro)
// //            echo $pro->price;

// //----------------------------------

// //        $products=Product::find(1);
// //        foreach ( $products->inventory as $pro)
// //           echo $pro->quantity;

//     }

}
