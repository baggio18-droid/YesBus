<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OrdersController;

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

//Route::get('/home', [PagesController::class, 'home']);
Route::get('/destination', [PagesController::class, 'destination']);
Route::get('/order', [PagesController::class, 'order']);
Route::get('/schedules', [PagesController::class, 'schedules']);
Route::get('/contact', [PagesController::class, 'contact']);




Auth::routes();

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order',[App\Http\Controllers\OrdersController::class, 'index'])->name('order');
//Route::get('/order/create', [App\Http\Controllers\OrdersController::class, 'create'])->name('createForm');
Route::post('/orderaction', [App\Http\Controllers\OrdersController::class, 'storeOrder']);
