<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenCatController extends Controller
{
    //
    public function index()
    {
//        $products=Product::where('cat_id',2)->get();
//        $cart=Cart::content();
        return view('mencat');

    }


    function menAction(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('products')
                    ->where('productName', 'like', '%'.$query.'%')->where('cat_id',2)
                    ->orderBy('id', 'desc')
                    ->get();

            } else {
                $data = DB::table('products')->where('cat_id',2)
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

                                   <p><strong> '.$row->productName.'</strong></p>
                                   <p>'.$row->productName.'</p>

                                   <span class="price"> <del> '.$row->price.' </del> '.$row->offer.'</span>
                                 </div>
                                 <a href="#" class="add-cart">Add to Cart</a>
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
