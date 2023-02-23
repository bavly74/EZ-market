<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

//   public function store(Request $r){
////       $product=Product::findOrFail($r->input('product_ID'));
////       Cart::add($product->id, $product->productName, $r->input('quantity'),$product->productCost);
//       return redirect()->route('products.index')->with('message','item added');
//
//   }
}
