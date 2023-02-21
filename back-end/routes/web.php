<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;

use Illuminate\Support\Facades\Route;

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
Route::get('auth/facebook', 'App\Http\Controllers\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialController@loginWithFacebook');

Route::get('auth/google', 'App\Http\Controllers\SocialController@googleRedirect');
Route::get('auth/google/callback', 'App\Http\Controllers\SocialController@loginWithGoogle');





//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//    Route::get('/', function()
//    {
//        return view('welcome');
//    });
//
//});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [UserController::class,'logout'])->name('logout.logout');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

//    Route::get('/', function () {
//        return view('welcome');
//    });
        Route::get('/',[\App\Http\Controllers\ProductController::class,'show'])->name('products.index');
    Route::post('/',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
//    Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');

    Route::get('/dashboard', function () {
        return 'hi';
    });


});

Route::get('user/register',[UserController::class,'create'])->name('user.register');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
