<?php

namespace App\Http\Livewire;


use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    protected $listeners = ['carts' => 'render'];

    public function render()
    {
        $carts=Cart::instance('shopping')->content();
      return view('livewire.cart-component',compact('carts'));
    }

public function removeProduct($rowId){

    Cart::instance('shopping')->remove($rowId);
    $this->emit('cart_updated');
    return view('livewire.cart-component');

}



    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('shopping')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('shopping')->update($rowId, $qty);
        $this->emit('cart_updated');
    }



    public function increaseQuantity($rowId)
    {

        $product = Cart::instance('shopping')->get($rowId);
        $productqty = Product::find($product->id);

        //$productInventory= $productqty->inventory->quantity;
        $qty = $product->qty + 1;
        if ($productqty->inventory->quantity >= $qty) {

            $productInventory = $productqty->inventory->quantity;
            $qty = $product->qty + 1;
            if ($productInventory >= $qty) {

                Cart::instance('shopping')->update($rowId, $qty);
                $this->emit('cart_updated');

            } else {
                echo 'no';

            }


            return view('livewire.cart-component');


        }

    }

}
