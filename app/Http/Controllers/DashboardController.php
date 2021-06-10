<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class DashboardController extends Controller
{
    public function home()
    { return view('adminpages.index'); }

    public function buses()
    { return view('adminpages.buses'); }

    public function orders()
    { return view('adminpages.orders'); }

    public function schedules()
    { return view('adminpages.schedules'); }

    public function categories()
    { return view('adminpages.categories'); }
}
