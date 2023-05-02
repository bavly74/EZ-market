<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KidsCatController extends Controller
{
    //
    public function index()
    {
        $parentCategories = Category::where('parent_id',null)->get();

        try {
            $category = Category::where('name', 'kids')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('category-not-found')->with('message', 'The "kids" category was not found.');
        }

        $products = Product::where('category_id', $category->id)
            ->orWhereHas('category', function($query) use ($category) {
                $query->where('parent_id', $category->id);
            })
            ->get();

        if ($products->isEmpty()) {
            return view('no-products');
        }
        $cart=Cart::content();

        return view('kidscat',compact('products','parentCategories'));
    }
//    function kidsAction(Request $request)
//    {
//        if($request->ajax())
//        {
//            $output = '';
//            $query = $request->get('query');
//            if($query != '') {
//                $data = DB::table('products')
//                    ->where('productName', 'like', '%'.$query.'%')
//                    ->orderBy('id', 'desc')
//                    ->get();
//
//            } else {
//                $data = DB::table('products')->where('cat_id',3)
//                    ->orderBy('id', 'desc')
//                    ->get();
//            }
//
//            $total_row = $data->count();
//            if($total_row > 0){
//                foreach($data as $row)
//                {
//                    $output .= '
//                    <tr>
//                    <td>'.$row->productName.'</td>
//                     <td>'.$row->pro_image1.'</td>
//                      <td>'.$row->pro_image2.'</td>
//                       <td>'.$row->status.'</td>
//                        <td>'.$row->variations.'</td>
//                         <td>'.$row->description.'</td>
//                         <td>'.$row->most_recent.'</td>
//                        <td>'.$row->offer.'</td>
//                         <td>'.$row->price.'</td>
//                       <td>'.$row->avg_price.'</td>
//                    </tr>
//                    ';
//                }
//            } else {
//                $output = '
//                <tr>
//                    <td align="center" colspan="20">No Data Found</td>
//                </tr>
//                ';
//            }
//            $data = array(
//                'table_data'  => $output,
//                'total_data'  => $total_row
//            );
//            echo json_encode($data);
//        }
//    }



    public function kidsAction(Request $request)
    {
        $search = $request->input('search');

        $query = Product::query();

        if($search) {
            $query->where('productName', 'LIKE', '%'.$search.'%')->where('cat_id',3);
        }

        $results = $query->with('brand')->with('inventory')->get();

        return response()->json($results);
    }

}
