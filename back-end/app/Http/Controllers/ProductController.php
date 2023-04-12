<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=Product::all();
        return view('Products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product=new Product();
        $product->productName=$request->productName;
        $product->brand_id=$request->brand_id;
        $product->cat_id=$request->cat_id;
        $product->pro_image1=$request->pro_image1;
        $product->pro_image2=$request->pro_image2;
        $product->status=$request->status;
        $product->description=$request->description;
        $product->most_recent=$request->most_recent;
        $product->price=$request->price;
        $product->offer=$request->offer;
        $product->avg_price=$request->avg_price;
        $product->save();
        return redirect()->route('product.index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $allProduct=Product::all();
        $product=Product::findorfail($id);
        return view('Products.edit', compact('product','allProduct'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findorfail($id);
        $product->productName=$request->productName;
        $product->pro_image1=$request->pro_image1;
        $product->pro_image2=$request->pro_image2;
        $product->status=$request->status;
        $product->description=$request->description;
        $product->most_recent=$request->most_recent;
        $product->price=$request->price;
        $product->offer=$request->offer;
        $product->avg_price=$request->avg_price;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=Product::findorfail($id)->delete();
       
        return redirect()->route('product.index'); 

       
    }
}
