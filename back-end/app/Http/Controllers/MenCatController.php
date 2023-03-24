<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenCatController extends Controller
{
    //
    public function index()
    {

        return view('mencat');

    }
}
