<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CartCounter;
use App\Models\Order;
use App\Models\User;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    /** @noinspection PhpArrayToStringConversionInspection */
    public function index(){
//        $cartitems=Cart::where('user_id',Auth::id())->get();
        $cartitems=Cart::instance('shopping')->content();
        return view('layouts.checkout',compact('cartitems'));
    }

}
