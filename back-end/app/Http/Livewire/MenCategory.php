<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use mysql_xdevapi\Exception;
use Throwable;

class MenCategory extends Component
{

    use ProductTrait;
    public $products;
    public $productsQty;
    public array $quantity=[];

    public function mount(){
        $this->products=Product::where('cat_id','2')->get();
        foreach ($this->products as $product){
            $this->quantity[$product->id]=1;
        }
    }

    public function render()
    {
        // $qty=Product::find($this->products->id);
        $cart=Cart::instance('shopping')->content();
        $menProducts=Product::all();
        return view('livewire.product-table',compact('cart','menProducts'));
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



        return view('livewire.men-category', compact('product'));
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
//        return view('livewire.product-table',compact('product') );
//    }

}
