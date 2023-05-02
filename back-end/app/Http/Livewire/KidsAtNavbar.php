<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use mysql_xdevapi\Exception;
use Throwable;

class KidsAtNavbar extends Component
{

    use ProductTrait;
    public $products;
    public $productsQty;
    public array $quantity=[];

    public function mount(){
        //$parentCategories = Category::where('parent_id',null)->get();

        $category = Category::where('name', 'kids')->get();

        // $this->products = Product::where('category_id', $category->id)
        //     ->orWhereHas('category', function($query) use ($category) {
        //         $query->where('parent_id', $category->id);
        //     })
        //     ->get();
        $categoryName = 'kids';
        $category = Category::where('name', 'kids')->get();

       $this->products = Product::join('categories', 'categories.id', '=', 'products.category_id')
           ->where('categories.name', $categoryName)
           ->get();
        foreach ($this->products as $product){
            $this->quantity[$product->id]=1;
        }
    }

    public function render()
    {
        $products=Product::all();
//        $qty=Product::find(1);
        $cart=Cart::instance('shopping')->content();
        // $recentProduct=Product::where('most_recent','1');
        return view('livewire.kids-at-navbar',compact('cart','products'));
    }



    public function addItemToCart($product_ID)
    {
        $product = Product::findOrFail($product_ID);

        try {
            Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID], $product->price);
            $this->emit('cart_updated');
            $this->emit('carts');
            session()->flash('message', 'item added successfully .');
        } catch (Throwable $e) {
            report($e);

            return false;
        }

        return view('livewire.kids-at-navbar', compact('product'));
    }
//
//
//
//
//    public function addItemToWishlist($product_ID){
//        $product=Product::findOrFail($product_ID);
//        Cart::instance('wishlist')->add($product->id, $product->productName,$this->quantity[$product_ID],$product->price,$product->quantity);
//        $this->emit('wishlist');
//        $this->emit('wishlistContent');
//        session()->flash('message', 'item added to wishlist successfully .');
//        return view('livewire.product-table',compact('product') );
//    }

}
