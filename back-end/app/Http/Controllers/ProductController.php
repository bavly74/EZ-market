<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Product;
//use Illuminate\Http\Request;
//
//class ProductController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $product=Product::all();
//        return view('Products.show', compact('product'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        $product=Product::all();
//        return view('Products.create', compact('product'));
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//        $product=new Product();
//        $product->productName=$request->productName;
//        $product->brand_id=$request->brand_id;
//        $product->cat_id=$request->cat_id;
//        $product->pro_image1=$request->pro_image1;
//        $product->pro_image2=$request->pro_image2;
//        $product->status=$request->status;
//        $product->description=$request->description;
//        $product->most_recent=$request->most_recent;
//        $product->price=$request->price;
//        $product->offer=$request->offer;
//        $product->avg_price=$request->avg_price;
//        $product->save();
//        return redirect()->route('product.index');
//
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//        $allProduct=Product::all();
//        $product=Product::findorfail($id);
//        return view('Products.edit', compact('product','allProduct'));
//
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        $product=Product::findorfail($id);
//        $product->productName=$request->productName;
//        $product->pro_image1=$request->pro_image1;
//        $product->pro_image2=$request->pro_image2;
//        $product->status=$request->status;
//        $product->description=$request->description;
//        $product->most_recent=$request->most_recent;
//        $product->price=$request->price;
//        $product->offer=$request->offer;
//        $product->avg_price=$request->avg_price;
//        $product->save();
//        return redirect()->route('product.index');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//        $product=Product::findorfail($id)->delete();
//
//        return redirect()->route('product.index');
//
//
//    }
//}


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('backend.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('backend.products.create',compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'image1' => 'required',
        //     'image2' => 'required',
        //     'status' => 'required',
        //     'description' => 'required',
        //     'most_recent' => 'required',
        //     'offer' => 'required',
        //     'category' => 'required',
        //     'brand' => 'required',

        // ]);

        // Product::create($request->all());
        $product=new Product();
        $stock=new Inventory();
        $product->productName=$request->name;
        $product->brand_id=$request->brand;
        // dd($product->brand_id);
        $product->category_id=$request->category;
        $product->pro_image1=$request->image1;
        $product->pro_image2=$request->image2;
        $product->status=$request->status;
        $product->most_recent=$request->most_recent;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->offer=$request->offer;
        $product->avg_price=$product->price/2;

        $stock->product_id= $request->id;
        $stock->pro_Name=$request->name;
        $stock->quantity=$request->quantity;
        $stock->product_cost=$request->cost;
        $product->save();
        $stock->save();

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
