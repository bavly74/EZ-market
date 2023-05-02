<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CartCounter;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    /** @noinspection PhpArrayToStringConversionInspection */
    public function index(){
//        $cartitems=Cart::where('user_id',Auth::id())->get();
        $cartitems=Cart::instance('shopping')->content();
//        foreach ($cartitems as $item){
//            if (!Product::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists()){
//                $removeitem=Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_qty)->first();
//                $removeitem->delete();
//            }
//        }

        return view('layouts.checkout',compact('cartitems'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function placeorder(Request $request){
        $cartitems=Cart::instance('shopping')->content();
        $ordfer=new Order();
        $ordfer->user_id=Auth::id();
        $ordfer->fname=request()->input('fname');
        $ordfer->lname=request()->input('lname');
        $ordfer->email=request()->input('email');
        $ordfer->phone=request()->input('phone');
        $ordfer->address=request()->input('address');
        $ordfer->address2=request()->input('address2');
        $ordfer->city=request()->input('city');
        $ordfer->state=request()->input('state');
        $ordfer->country=request()->input('country');
        $ordfer->pincode=request()->input('pincode');
        $ordfer->status=request()->input('status');
        $ordfer->message=request()->input('message');
        $ordfer->tracking_no= 'bebo'.rand(1111,9999);
        $ordfer->total_price=0;

        $ordfer->save();


        foreach ($cartitems as $item){
            orderitem::create([
                'order_id'=>$ordfer->id,
                'prod_id'=>$item->id,
                'qty'=>$item->qty,
                'price'=>$item->price,
            ]);
//            $prod=product::where('id',$item->id)->first();
  //          $prod->qty=$prod->qty - $item->qty;
    //        $prod->update();
        }
       if (Auth::user()->address ==Null){
            $user=order::where('id',Auth::id())->get();
            $user->name=request()->input('fname');
            $user->lname=request()->input('lname');
            $user->phone=request()->input('phone');
            $user->address=request()->input('address');
            $user->address2=request()->input('address2');
            $user->city=request()->input('city');
            $user->state=request()->input('state');
            $user->country=request()->input('country');
            $user->pincode=request()->input('pincode');
            //$user->update();

        }

        $cartitems=Cart::instance('shopping')->content();
        Cart::destroy($cartitems);

        return redirect('/my_orders')->with('status',"order placed successfully");

    }

    }


