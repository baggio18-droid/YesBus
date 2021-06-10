<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/destination', [PagesController::class, 'destination']);
Route::get('/order', [PagesController::class, 'order']);
Route::get('/schedules', [PagesController::class, 'schedules']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/admin/adminPages', [DashboardController::class, 'home']);
Route::get('/admin/adminPages/bus', [DashboardController::class, 'buses']);
Route::get('/admin/adminPages/order', [DashboardController::class, 'orders']);
Route::get('/admin/adminPages/schedule', [DashboardController::class, 'schedules']);
Route::get('/admin/adminPages/category', [DashboardController::class, 'categories']);

Route::resource('buses', BusController::class);