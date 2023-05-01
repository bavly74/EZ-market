<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function logout()
    {
       // Session::flush();

        Auth::logout();

        return redirect('/');
    }
    public function showProfile(){
        return view('profile.show');
    }
    public function index(){
        $orders=Order::where('user_id',Auth::id())->get();
        return view('frontend.orders.index',compact('orders'));
    }
    public function view($id){
       $orders=Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }
}

