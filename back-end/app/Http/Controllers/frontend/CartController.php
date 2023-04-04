<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

   public function store(Request $r){
       $product=Product::findOrFail($r->input('product_ID'));
       Cart::instance('shopping')->add($product->id, $product->productName, 1, $product->price);
       return redirect()->back()->with('message','item added');
   }
}
