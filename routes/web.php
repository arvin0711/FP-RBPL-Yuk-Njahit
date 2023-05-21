<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\CustomerOrderController;
use \App\Http\Controllers\SearchPembeliController;
use \App\Http\Controllers\DetailController;
use \App\Http\Controllers\AddProductController;


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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('order', 'OrderController@index');
//Route::get('/order', 'OrderController@index');
Route::controller(OrderController::class)->group(function () {
    Route::get('order', 'index');
    Route::get('order/payment', 'index2');
    Route::get('order/payment2', 'payment2');
    Route::get('order/measurement', 'getDetailOrder');
    Route::get('order/myorder', 'getHistoryTransaction');

    Route::get('order/rating', 'rating');
    Route::get('order/thankyou', 'paymentMethod');
    Route::get('order/confirm', 'confirmOrder');


});

Route::controller(CartController::class)->group(function () {
    Route::get('cart', 'index');
    Route::get('cart/showCart', 'showCart');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index');
    Route::get('login/welcome', 'welcome');
    Route::get('login/login', 'login');
    Route::get('login/error1', 'emailSudahTerdaftar');
    Route::get('login/error2', 'errorOTP');
    Route::get('login/error3', 'loginError');
    Route::get('login/otp', 'otp');
    Route::get('login/dashboard', 'dashboard');
    Route::get('login/verifAkunPembeli', 'verifAkunPembeli');
    Route::get('login/edit', 'editProfile');
    Route::get('login/edit2', 'editProfileConfirm');
});
Route::controller(CustomerOrderController::class)->group(function () {
    Route::get('customerOrder', 'index');

});
Route::controller(SearchPembeliController::class)->group(function () {
    Route::get('search', 'index');
    Route::get('search/berhasil', 'searchBaju');
    Route::get('search/gagal', 'gagal');
});
Route::controller(DetailController::class)->group(function () {
    Route::get('detail', 'index');
    Route::get('detail/detail', 'loadDetail');
    Route::get('detail/detail2', 'loadDetail2');
    Route::get('detail/error', 'loadDetail2error');

});
Route::controller(AddProductController::class)->group(function () {
    Route::get('add', 'index');
    Route::get('add/lihat', 'viewMeasurement');


});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('blog', function () {
	return view('blog');
});