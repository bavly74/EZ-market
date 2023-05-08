<?php

use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\KidsCatController;
use App\Http\Controllers\frontend\MenCatController;
use App\Http\Controllers\frontend\ProductDetailsController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\WomenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AllProductController;

use App\Http\Controllers\brandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DeliveryManController;

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






// Route::middleware('admin.check')->group(function(){
//     Route::prefix('admin')->middleware(['auth'])->group(function () {
//         Route::get('logout',function(){
//             auth()->logout();
//         });
//         Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');
//         Route::get('admin/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');
    

//     });
//     });

Route::middleware('admin.check')->group(function(){
    require __DIR__.'/admin.php';
});






Route::get('auth/facebook', 'App\Http\Controllers\frontend\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\frontend\SocialController@loginWithFacebook');

Route::get('auth/google', 'App\Http\Controllers\frontend\SocialController@googleRedirect');
Route::get('auth/google/callback', 'App\Http\Controllers\frontend\SocialController@loginWithGoogle');





//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//    Route::get('/', function()
//    {
//        return view('welcome');
//    });
//
//});


Route::get('pay','App\Http\Controllers\FootorahController@payOrder');
Route::get('callback',function () {
    return 'success';
});
Route::get('error',function (){
    return 'payment failed';
});


Route::get('/product/{slug}',\App\Http\Livewire\DetailsComponent::class)->name('product.details');

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [UserController::class,'logout'])->name('logout.logout');
    Route::get('checkout', [CheckoutController::class,'index'])->name('checkout.index');
    Route::post('place-order', [CheckoutController::class,'placeorder']);
    Route::get('my_orders',[UserController::class,'index']);
    Route::get('view-order',[UserController::class,'view']);
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

//    Route::get('/', function () {
//        return view('welcome');
//    });
    //Route::get('checkout', [CheckoutController::class,'index']);


    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'show')->name('home.index');
    });



    Route::get('search',[SearchController::class,'index'])->name('search');

    Route::get('all-products',[AllProductController::class,'index'])->name('allProducts');

Route::get('user/register',[UserController::class,'create'])->name('user.register');






    Route::controller(MenCatController::class)->group(function () {
        Route::get('mencat', 'index')->name('mencat');
        Route::get('/menaction',  'menAction')->name('menaction');
        Route::get('/mencat/{subcategory}', 'filterBySubcategory');

        //Route::get('Mensearch', 'menSearch')->name('mencat.search');
    });


    Route::controller(KidsCatController::class)->group(function () {
        Route::get('/kidscat', 'index')->name('kids.index');
        Route::get('/kidsaction',  'kidsAction')->name('kidsaction');

    });



    Route::controller(WomenController::class)->group(function () {
        Route::get('/women', 'index')->name('women.index');

        Route::get('/womenaction',  'womenAction')->name('womenaction');
    });



    Route::post('cart-store',[CartController::class,'store'])->name('cart.store');

    Route::get('user/register',[UserController::class,'create'])->name('user.register');

    Route::get('user/profile',[UserController::class,'showProfile'])->name('profile.show');




    // details section front

    // Route::get('details/{id}',[ProductDetailsController::class,'showDetails']);
    Route::get('details/{id}/',[ProductDetailsController::class,'productDetail'])->name('product.detail');

// end details section 
    Route::get('contact-us',[ContactController::class,'index']);


  


});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
//    ->group(function () {
////    Route::get('/dashboard', function () {
////        return view('dashboard');
////    })->name('dashboard');
//});


