<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class WishListCounter extends Component
{
    protected $listeners=['wishlist'=>'render'];
    public function render()
    {
        $wishcounter=Cart::instance('wishlist')->count();
        return view('livewire.wish-list-counter',compact('wishcounter'));
    }
}
