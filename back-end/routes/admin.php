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

// Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'role:admin']], function () {

// Route::group(['prefix'=>'admin','middleware'=>'guest:admin', 'role:Admin'],function(){
//     Route::get('login',[\App\Http\Controllers\Admin\LoginController::class,'show_login_view'])->name('admin.showlogin');
//     Route::post('login',[\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login');

// });

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('logout',function(){
        auth()->logout();
    });
    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');
    Route::get('admin/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');


//Route::resource('brand',brandController::class);
Route::resource('category',categoryController::class);
//Route::resource('product',ProductController::class);
Route::resource('inventory',InventoryController::class);
Route::resource('delivery',DeliveryManController::class);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', function () {
        return 'hi';
    });
    Route::resource('roles', RoleController::class);
    Route::resource('users', EmployeeController::class);
    Route::resource('products', ProductController::class);
    Route::resource('brand',brandController::class);

});
});