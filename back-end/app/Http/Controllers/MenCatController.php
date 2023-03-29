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







    function menSearch(Request $request)
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


            <p>'.$row->brand->name.'</p>
                          <p><strong> '.$row->productName.' </strong></p>
                          <span class="price"> <del>'.$row->price.' </del> '.$row->price.'</span>

                          <p style="color:black"><strong>in stock :'.$row->inventory->quantity.' </strong></p>


                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }



    public function menProductsAtNavbar(){
        $products=Product::where('cat_id',2)->first(3)->get();
        return view('layouts.category',compact('products'));
    }

}
