<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ObjectCreateController;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
//    return view('main');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/product-company-create', [ObjectCreateController::class, 'productCreate']);

Route::post('/news-company-create', [ObjectCreateController::class, 'newsCreate']);

Route::post('/news-company-subscribe', [UserController::class, 'newsSubscribe']);

Route::post('/products-company-subscribe', [UserController::class, 'productsSubscribe']);
