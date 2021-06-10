<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ScheduleController;
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