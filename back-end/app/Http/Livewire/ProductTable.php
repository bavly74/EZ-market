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
        $products=Product::all();

        return view('livewire.product-table');
    }
    public function addToCart($product_ID){
        $product=Product::findOrFail($product_ID);
        Cart::add($product->id, $product->productName, $this->quantity[$product_ID],$product->productCost);
    }
}
