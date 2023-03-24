<?php

namespace App\Http\Traits;
namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use mysql_xdevapi\Exception;
use Throwable;

trait ProductTrait
{
    public $products;
    public $productsQty;
    public array $quantity=[];






//    public function addItemToCart($product_ID)
//    {
//        $product = Product::findOrFail($product_ID);
//
//        try {
//            Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID], $product->price);
//
////            Cart::instance('shopping')->add(array(
////                'id' => $product->id,
////                'name' => $product->productName,
////                'qty' => $this->quantity[$product_ID],
////                'price' => $product->price,
////                'image' => $product->pro_image1)
////            );
//
//
//        } catch (Throwable $e) {
//            report($e);
//
//            return false;
//        }
//
//        $this->emit('cart_updated');
//        $this->emit('carts');
//        session()->flash('message', 'item added successfully .');
//        return view('livewire.most-recent', compact('product'));
//    }
//



    public function addItemToWishlist($product_ID){
        $product=Product::findOrFail($product_ID);
        Cart::instance('wishlist')->add($product->id, $product->productName, $this->quantity[$product_ID], $product->price);
        $this->emit('wishlist');
        $this->emit('wishlistContent');
        session()->flash('message', 'item added to wishlist successfully .');
        return view('livewire.product-table',compact('product') );

    }



}
