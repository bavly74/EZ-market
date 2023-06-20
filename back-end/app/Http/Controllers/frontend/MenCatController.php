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
try{
        $search = $request->input('search');

        $query = Product::query();
        $category = Category::where('name', 'Men')->first();
        if($search) {
            $query->where(function ($q) use ($search, $category) {
                $q->where('productName', 'LIKE', '%'.$search.'%')
                  ->where('category_id',$category->id);
                $q->orWhereHas('category', function($q) use ($category) {
                    $q->where('parent_id',$category->id);
                });
            });
        }

        $results = $query->with('brand')->with('inventory')->get();
        dd($results); // Debugging output

        return response()->json($results);

    } catch(\Exception $e){

        Log::error($e->getMessage());
        // return an error response
        return response()->json(['error' => 'An error occurred.'], 500);
    }
    }







    public function filter(Request $request)
    {
        $price = $request->input('price');

        $query = Product::query();


        if($price) {
            $range = explode('-', $price);
            $query->whereBetween('price', [$range[0], $range[1]]);
        }

        $results = $query->get();

        return response()->json($results);
    }









}
