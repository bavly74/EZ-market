<?php

namespace App\Http\Livewire;

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

public function remove($rowId){
//    Cart::remove($rowId);
//    return view('livewire.cart-component');
dd($rowId) ;
}
}
