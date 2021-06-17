<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Route;
use App\Models\Schedule;
use \PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->paginate(20);
        $routes = Route::all();
        $schedules = Schedule::with('buses')->latest()->get();
        return view('adminpages.Orders',\compact('orders', 'routes', 'schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules = Schedule::latest()->get();
        $routes = Route::latest()->get();
        $success = 0;
        return view('adminpages.Order.add_orders', \compact('routes', 'schedules', 'success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Order;
        $orders->CustomerName = $request->name;
        $orders->schedule_id = $request->schedule_id;
        $orders->email= $request->email;
        $orders->phone = $request->phone;
        $orders->save();
        $schedules = Schedule::latest()->get();
        $routes = Route::latest()->get();
        $success = 1;
        return view('adminpages.Order.add_orders', \compact('routes', 'schedules', 'orders','success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::with('schedules')->find($id);
        $bus = Bus::find($orders->schedules->bus_id);
        $route = Route::find($bus->route_id);
        return view('adminpages.order.detail_order', compact('orders', 'route', 'bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::with('schedules')->find($id);
        $bus = Bus::find($orders->schedules->bus_id);
        $route = Route::find($bus->route_id);
        $schedule = Schedule::all();
        return view('adminpages.Order.edit_orders', \compact('orders', 'route', 'bus', 'schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orders=Order::find($id);
        $orders->CustomerName = $request->CustomerName;
        $orders->schedule_id = $request->schedule_id;
        $orders->email= $request->email;
        $orders->phone = $request->phone;
        $orders->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return back();
    }
    public function print_pdf($id){
        $orders = Order::with('schedules')->find($id);
        $bus = Bus::find($orders->schedules->bus_id);
        $route = Route::find($bus->route_id);
        $pdf = PDF::loadview('adminpages.order.detail_orderPDF', compact('orders', 'route', 'bus'));
        return $pdf->stream();

    }
}
