<?php
//
//namespace App\Http\Livewire;
//use App\Models\Inventory;
//use App\Models\Product;
//use Gloudemans\Shoppingcart\Facades\Cart;
//use Livewire\Component;
//use Livewire\WithPagination;
//use mysql_xdevapi\Exception;
//use Throwable;
//
//
//
//class MenCategory extends Component
//{
//    use WithPagination;
//
//    use ProductTrait;
//    public $products;
//    public $productsQty;
//    public array $quantity=[];
//    public $searchTerm;
//    public $productName ;
//    public function updatingSearch()
//    {
//        $this->resetPage();
//    }
//
//
//    public function resetInput()
//    {
//        $this->productName = '';
//    }
//    public function mount(){
//        $this->products=Product::where('cat_id',2)->get();
//        foreach ($this->products as $product){
//            $this->quantity[$product->id]=1;
//        }
//
//    }
//
//
//    public function render()
//    {
//        $cart = Cart::content();
//
//        return view('livewire.men-category',
//            compact('cart'));
//    }
//
//    public function addToCart($product_id)
//    {
//        $product = Product::findOrFail($product_id);
//        Cart::add(
//            $product->id,
//            $product->productName,
//            $this->quantity[$product_id],
//            $product->price ,
//        );
//
//        $this->emit('cart_updated');
//    }
//
//
//
//
////    public function addCategoryToCart($product_ID)
////    {
////      //  return $product_ID ;
////        $product = Product::findOrFail($product_ID);
////
////        try {
////            Cart::instance('shopping')->add($product->id, $product->productName, $this->quantity[$product_ID], $product->price);
////            $this->emit('cart_updated');
////            $this->emit('carts');
////            session()->flash('message', 'item added successfully .');
////        } catch (Throwable $e) {
////            report($e);
////
////            return false;
////        }
////
////        return view('livewire.men-category', compact('product'));
////    }
//
//
////
////
////
////
////    public function addItemToWishlist($product_ID){
////        $product=Product::findOrFail($product_ID);
////        Cart::instance('wishlist')->add($product->id, $product->productName,$this->quantity[$product_ID],$product->price,$product->quantity);
////        $this->emit('wishlist');
////        $this->emit('wishlistContent');
////        session()->flash('message', 'item added to wishlist successfully .');
////        return view('livewire.product-table',compact('product') );
////    }
//
//}
