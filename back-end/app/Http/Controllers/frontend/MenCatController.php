<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
//use App\Models\SubCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MenCatController extends Controller
{
    //
    public function index()
    {
        //$products=Product::where('cat_id',1)->get();
        $parentCategories = Category::where('parent_id',null)->get();

        try {
            $category = Category::where('name', 'Men')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('category-not-found')->with('message', 'The "men" category was not found.');
        }

        $products = Product::where('category_id', $category->id)
            ->orWhereHas('category', function($query) use ($category) {
                $query->where('parent_id', $category->id);
            })
            ->get();

        if ($products->isEmpty()) {
            return view('no-products');
        }

      //  $cart=Cart::content();

        return view('mencat',compact('products','parentCategories'));

    }

    public function menAction(Request $request)
    {
        $search = $request->input('search');

        $query = Product::query();

        if($search) {
            $query->where('productName', 'LIKE', '%'.$search.'%')->where('category_id',2);
        }

        $results = $query->with('brand')->with('inventory')->get();

        return response()->json($results);
    }








    public function filterBySubcategory($categoryName, $subcategoryName)
    {
        $category = Category::where('name', $categoryName)->with('children')->firstOrFail();
        $subcategory = $category->children()->where('name', $subcategoryName)->firstOrFail();

        $products = Product::where('category_id', $subcategory->id)->get();

        return view('mencat', [
            'products' => $products,
        ]);
    }





}
