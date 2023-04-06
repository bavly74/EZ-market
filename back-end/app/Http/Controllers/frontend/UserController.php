<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
}

