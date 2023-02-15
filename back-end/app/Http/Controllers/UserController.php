<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}

