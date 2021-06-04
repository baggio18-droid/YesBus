<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function order(){
        return view('pages.order');
    }
    public function index(){
        $orders = Order::all();
        return view('pages.order' , compact('orders'));
    }

    public function create(){
        return view('welcome');
    }
   
    public function storeOrder(){
        $order = new Order();

        $order->name = request('name');
        $order->departure = request('departure');
        $order->destination = request('destination');
        $order->date = request('datetravel')->format('d/m/Y');

        $order->save();
        return redirect('/order');
    }
}
