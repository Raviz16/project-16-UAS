<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;
use App\http\Controllers\SettingController;
use App\Http\Controllers\ClientProdukController;

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

Route::get('beranda/{status}', [HomeController::class, 'showberanda']);

Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('client', [HomeController::class, 'client']);



Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

// Halaman Admin

// Route::prefix('pembeli')->middleware('auth:pembeli')->group(function(){

// Route::post('produk/filter', [ProdukController::class, 'filter']);
// Route::get('beranda', [HomeController::class, 'showberanda']);
// Route::resource('produk', ProdukController::class);
// Route::resource('user', UserController::class);

// });

// Route::prefix('penjual')->middleware('auth:penjual')->group(function(){

// Route::post('produk/filter', [ProdukController::class, 'filter']);
// Route::get('beranda', [HomeController::class, 'showberanda']);
// Route::resource('produk', ProdukController::class);
// Route::resource('user', UserController::class);

// });

//Route::prefix('admin')->middleware('auth')->group(function(){
Route::prefix('admin')->group(function(){


Route::post('produk/filter', [ProdukController::class, 'filter']);
Route::get('beranda', [HomeController::class, 'showberanda']);
Route::resource('produk', ProdukController::class);
Route::resource('product', ProductController::class);
Route::resource('user', UserController::class);

});

Route::get('test-collection', [ProdukController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);


// Halaman Client

Route::get('index', [ClientProdukController::class, 'index']);
Route::get('base', [ClientProdukController::class, 'base']);
Route::get('beli', [ClientProdukController::class, 'beli']);

//Route::get('beli/{produk}', [ClientProdukController::class, 'create']);

