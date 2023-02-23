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
        $cart=Cart::content();
        $products=Product::all();
        return view('livewire.product-table',compact('products','cart'));
    }
    public function add($product_ID){
        $product=Product::findOrFail($product_ID);
        Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID],$product->productCost);
        session()->flash('message', 'item added successfully .');

        //toastr()->success('doneeee');
            //return redirect()->route('products.index');
//return redirect()->back();
       return view('livewire.product-table',compact('product') );
  //return redirect()->route('products.index',compact('product'))->with('message','item added');
    }
}
