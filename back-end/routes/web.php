<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\KidsCatController;

use App\Http\Controllers\MenCatController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\WomenController;
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

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'show')->name('home.index');
    });


    Route::get('/dashboard', function () {
        return 'hi';
    });


    Route::get('search',[SearchController::class,'index'])->name('search');


    Route::controller(MenCatController::class)->group(function () {
        Route::get('mencat', 'index')->name('mencat');
        Route::get('/menaction',  'menAction')->name('menaction');

        //Route::get('Mensearch', 'menSearch')->name('mencat.search');
    });


    Route::controller(KidsCatController::class)->group(function () {
        Route::get('/kidscat', 'index')->name('kids.index');
        Route::get('/kidsaction',  'kidsAction')->name('kidsaction');
    });

    Route::controller(WomenController::class)->group(function () {
        Route::get('/women-category', 'index')->name('women.index');
        Route::get('/womenaction',  'womenAction')->name('womenaction');
    });

    Route::post('cart-store',[CartController::class,'store'])->name('cart.store');

    Route::get('user/register',[UserController::class,'create'])->name('user.register');

    Route::get('user/profile',[UserController::class,'showProfile'])->name('profile.show');

    Route::get('details/{id}',[ProductDetailsController::class,'showDetails']);

});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




