<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class WishListComponent extends Component
{
    protected $listeners=['wishlistContent'=>'render'];
    public function render()
    {
        $wishlist=Cart::instance('wishlist')->content();
        return view('livewire.wish-list-component',compact('wishlist'));
    }
}
