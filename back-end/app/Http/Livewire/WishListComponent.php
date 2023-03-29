<?php

namespace App\Http\Livewire;

use App\Models\Product;
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
    public function removeProduct($rowId){
        Cart::instance('wishlist')->remove($rowId);
        $this->emit('wishlist');
        return view('livewire.cart-component');
    }

}
