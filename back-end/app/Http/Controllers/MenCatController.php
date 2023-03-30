<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class MenCatController extends Controller
{
    //
    public function index()
    {
        $products=Product::where('cat_id',2)->get();
        $cart=Cart::content();
        return view('mencat',compact('products','cart'));

    }


//    public function menSearch(Request $r){
//if($r->search){
//$products=Product::where('productName','LIKE','%'.$r->search.'%')->where('cat_id',2)->latest()->paginate(15);
//    return view('layouts.search',compact('products'));
//
//}else{
//return redirect()->back()->with('message','empty');
//}
//    }






    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('products')
                    ->where('productName', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            } else {
                $data = DB::table('products')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '

                    <div class="product">
                             <div class="productImg">
                               <img src="'.$row->pro_image1.'" alt="" />
                               <img src="'.$row->pro_image2.'" alt="" />
                             </div>
                             <div class="productInfo">

                               <p><strong>
                               '.$row->productName.'</strong></p>
                               <p>'.$row->productName.'</p>

                               <span class="price"> <del>'.$row->offer.' </del> '.$row->price.'</span>
                             </div>
                             <a href="#" class="add-cart">Add to Cart:----</a>
                           </div>
                    ';
                }
            } else {
                $output = '
                <div>
                    <p align="center" colspan="20">No Data Found</p>
                </div>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

}
