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
                    ->where('productName', 'like', '%'.$query.'%')
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


                    <div>'.$row->productName.'</div>
                     <div>'.$row->pro_image1.'</div>
                      <div>'.$row->pro_image2.'</div>
                       <div>'.$row->status.'</div>
                        <div>'.$row->variations.'</div>
                         <div>'.$row->description.'</div>
                         <div>'.$row->most_recent.'</div>
                        <div>'.$row->offer.'</div>
                         <div>'.$row->price.'</div>
                       <div>'.$row->avg_price.'</div>




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
