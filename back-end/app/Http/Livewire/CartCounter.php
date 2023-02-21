<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    public function render()
    {
        $cartCount=Cart::content()->count();
        return view('livewire.cart-counter',compact('cartCount'));
    }
}
