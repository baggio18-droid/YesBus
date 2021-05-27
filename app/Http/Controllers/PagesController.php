<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function destination(){
        return view('pages.destination');
    }
    public function order(){
        return view('pages.order');
    }
    public function schedules(){
        return view('pages.schedules');
    }
    public function contact(){
        return view('pages.contact');
    }

}
