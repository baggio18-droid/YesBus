<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Route;
use App\Models\Message;

class PagesController extends Controller
{
    public function home(){
       return view('pages.home');
    }

    public function destination(){
        return view('pages.destination');
    }
    public function order(){
        $schedules = Schedule::with('buses')->latest()->paginate(20);
        $routes = Route::all();
        return view('pages.order', compact('schedules', 'routes'));
    }
    public function schedules(Request $request){
        $schedules = Schedule::with('buses')->where('name', $request->get('search'))->paginate(20);
        $routes = Route::all();
        return view('pages.schedules', compact('schedules', 'routes'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function orderUser(){
        return view('pages.OrderUser');
    }
    public function index()
    {
        $messages = Message::latest()->paginate(20);
        return view('adminpages.Message', compact('messages'));
    }

    public function store(Request $request)
    {
        $messages = new Message;
        $messages->firstname = $request->firstname;
        $messages->email = $request->email;
        $messages->subject = $request->subject;
        $messages->messages = $request->messages;
        $messages->save();
        return back();
    }

    public function destroy($id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return back();
    }

}
