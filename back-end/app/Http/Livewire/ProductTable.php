<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductTable extends Component
{
    public $products;
    public array $quantity=[];

    public function mount(){
        $this->products=Product::all();
        foreach ($this->products as $product){
            $this->quantity[$product->id]=1;
        }
    }
    public function render()
    {
        $cart=Cart::instance('shopping')->content();
        $products=Product::all();
        return view('livewire.product-table',compact('products','cart'));
    }
    public function addItemToCart($product_ID){
        $product=Product::findOrFail($product_ID);
        Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID],$product->productCost);
        $this->emit('cart_updated');
        $this->emit('carts');
        session()->flash('message', 'item added successfully .');
       return view('livewire.product-table',compact('product') );
    }
    public function addItemToWishlist($product_ID){
        $product=Product::findOrFail($product_ID);
        Cart::instance('wishlist')->add($product->id, $product->productName,$this->quantity[$product_ID],$product->productCost,$product->productCost);
        $this->emit('wishlist');
        $this->emit('wishlistContent');
        session()->flash('message', 'item added to wishlist successfully .');
        return view('livewire.product-table',compact('product') );

    }
}
