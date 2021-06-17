<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\OrderController;
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
Route::get('/order', [PagesController::class, 'order'])->name('Order');
Route::get('/schedules', [PagesController::class, 'schedules'])->name('Schedules');
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/admin/adminPages', [DashboardController::class, 'home']);
Route::get('/admin/adminPages/order', [DashboardController::class, 'orders']);
Route::get('/admin/adminPages/category', [DashboardController::class, 'categories']);

//Buses Data
Route::get('/admin/adminPages/bus', [BusController::class, 'index'])->name('buses');
Route::get('/admin/adminPages/Bus/add_buses', [BusController::class, 'create'])->name('buses.create');
Route::post('/admin/adminPages/Bus/add_buses', [BusController::class, 'store'])->name('buses.store');
Route::get('/admin/adminPages/Bus/detail_buses/{id}', [BusController::class, 'show'])->name('buses.show');
Route::get('/admin/adminPages/Bus/edit_buses/{id}', [BusController::class, 'edit'])->name('buses.edit');
Route::post('/admin/adminPages/Bus/edit_buses/{id}', [BusController::class, 'update'])->name('buses.update');
Route::get('/admin/adminPages/Bus/add_buses/{id}', [BusController::class, 'destroy'])->name('buses.destroy');

//Schedules Data
Route::get('/admin/adminPages/schedule', [ScheduleController::class, 'index'])->name('schedules');
Route::get('/admin/adminPages/Schedule/add_schedules', [ScheduleController::class, 'create'])->name('schedules.create');
Route::post('/admin/adminPages/Schedule/add_schedules', [ScheduleController::class, 'store'])->name('schedules.store');
Route::get('/admin/adminPages/Schedule/detail_schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');
Route::get('/admin/adminPages/Schedule/edit_schedules/{id}', [ScheduleController::class, 'edit'])->name('schedules.edit');
Route::post('/admin/adminPages/Schedule/edit_schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
Route::get('/admin/adminPages/Schedule/add_schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

//Route Data
Route::get('/admin/adminPages/route', [RouteController::class, 'index'])->name('routes');
Route::get('/admin/adminPages/Route/add_routes', [RouteController::class, 'create'])->name('routes.create');
Route::post('/admin/adminPages/Route/add_routes', [RouteController::class, 'store'])->name('routes.store');
Route::get('/admin/adminPages/Route/detail_routes/{id}', [RouteController::class, 'show'])->name('routes.show');
Route::get('/admin/adminPages/Route/edit_routes/{id}', [RouteController::class, 'edit'])->name('routes.edit');
Route::post('/admin/adminPages/Route/edit_routes/{id}', [RouteController::class, 'update'])->name('routes.update');
Route::get('/admin/adminPages/Route/add_routes/{id}', [RouteController::class, 'destroy'])->name('routes.destroy');

//Order Data
Route::get('/admin/adminPages/order', [OrderController::class, 'index'])->name('order');
Route::get('/admin/adminPages/Order/add_orders', [OrderController::class, 'create'])->name('orders.create');
Route::post('/admin/adminPages/Order/add_orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/admin/adminPages/Order/detail_orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/admin/adminPages/Order/edit_orders/{id}', [OrderController::class, 'edit'])->name('orders.edit');
Route::post('/admin/adminPages/Order/edit_orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::get('/admin/adminPages/Order/add_orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/admin/adminPages/Order/detail_ordersPDF/{id}', [OrderController::class, 'print_pdf'])->name('print_pdf');

