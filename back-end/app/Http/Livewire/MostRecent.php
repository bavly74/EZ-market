<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use mysql_xdevapi\Exception;
use Throwable;


class MostRecent extends Component
{

use ProductTrait;
    public $recentProduct;
    public $productsQty;
    public array $quantity=[];

    public function mount(){
        $this->recentProduct=Product::where('most_recent',1)->get();
        foreach ($this->recentProduct as $product){
            $this->quantity[$product->id]=1;
        }
    }


    public function render()
    {
        $qty=Product::all();
//        $qty=Product::find(1);
        $cart=Cart::instance('shopping')->content();
      // $recentProduct=Product::where('most_recent','1');
        return view('livewire.most-recent',compact('cart','qty'));
    }



    public function addItemToCart($product_ID)
    {
        $product = Product::findOrFail($product_ID);

        try {
            Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID], $product->price);
            $this->emit('cart_updated');
            $this->emit('carts');
            session()->flash('message', 'item added successfully .');
        } catch (Throwable $e) {
            report($e);

            return false;
        }




        return view('livewire.most-recent', compact('product'));
    }
//
//
//
//
//    public function addItemToWishlist($product_ID){
//        $product=Product::findOrFail($product_ID);
//        Cart::instance('wishlist')->add($product->id, $product->productName,$this->quantity[$product_ID],$product->price,$product->quantity);
//        $this->emit('wishlist');
//        $this->emit('wishlistContent');
//        session()->flash('message', 'item added to wishlist successfully .');
//        return view('livewire.most-recent',compact('product') );
//
//    }


}
