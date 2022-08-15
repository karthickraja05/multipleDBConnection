<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'testReq'], function () {

	Route::get('/category_products', [HomeController::class, 'category_products']);
	Route::get('/add_product', [HomeController::class, 'add_product']);
	Route::post('/add_product', [HomeController::class, 'add_product']);
	
});

