<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
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

        $category = Category::where('name', 'Men')->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->orWhereHas('category', function($query) use ($category) {
                $query->where('parent_id', $category->id);
            })
            ->get();
        $cart=Cart::content();

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



//    function menAction(Request $request)
//    {
//
//        if($request->ajax())
//        {
//            $output = '';
//            $query = $request->get('query');
//            if($query != '') {
//                $data = DB::table('products')
//                    ->where('productName', 'like', '%'.$query.'%')->where('cat_id',2)
//                    ->orderBy('id', 'desc')
//                    ->get();
//
//            } else {
//                $data = DB::table('products')->where('cat_id',2)
//                    ->orderBy('id', 'desc')
//                    ->get();
//            }
//
//            $total_row = $data->count();
//            if($total_row > 0){
//                foreach($data as $row)
//                {
//                    $output .= '
//
//                               <div class="product">
//                                 <div class="productImg">
//                                   <img src="'.$row->pro_image1.'" alt="img" />
//                                   <img src="'.$row->pro_image2.'" alt="img" />
//                                 </div>
//                                 <div class="productInfo">
//
//                                   <p><strong> '.$row->productName.'</strong></p>
//                                   <p>'.$row->productName.'</p>
//
//                                   <span class="price"> <del> '.$row->price.' </del> '.$row->offer.'</span>
//                                 </div>
//                               </div>
//<form action="cart-store" method="post">
//<input type="hidden" name="_token" id="csrf-token" value='. Session::token() .' />
//
//<input type="hidden" name='.$row->id.'>
//
//<button type="submit">cart</button>
//</form>
//
//
//                    ';
//                }
//            } else {
//                $output = '
//                <div>
//                    <p align="center" colspan="20">No Data Found</p>
//                </div>
//                ';
//            }
//            $data = array(
//                'table_data'  => $output,
//                'total_data'  => $total_row
//            );
//            echo json_encode($data);
//        }
//    }

}
