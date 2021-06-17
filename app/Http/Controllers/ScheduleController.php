<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Route;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::with('buses')->latest()->paginate(20);
        $routes = Route::all();
        return view('adminpages.Schedules', compact('schedules', 'routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buses = Bus::latest()->get();
        $routes = Route::latest()->get();
        return \view('adminpages.Schedule.add_schedules', compact('buses', 'routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedules = new Schedule;
        $schedules->name = $request->name;
        $schedules->bus_id = $request->bus_id;
        $schedules->departure_time = $request->departure_time;
        $schedules->scheduled_arrival_time = $request->scheduled_arrival_time;
        $schedules->price = $request->price;
        $schedules->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedules = Schedule::with('buses')->find($id);
        $route = Route::find($schedules->buses->route_id);
        return view('adminpages.Schedule.detail_schedules', compact('schedules', 'route'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedules = Schedule::find($id);
        $buses = Bus::latest()->get();
        $routes = Route::latest()->get();
        return view('adminpages.Schedule.edit_schedules', \compact('schedules','buses', 'routes'));
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
        $schedules=Schedule::find($id);
        $schedules->update($request->all());
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
        $schedules = Schedule::find($id);
        $schedules->delete();
        return back();
    }
    public function search(Request $request ){
        $search =$request->search;
        $schedules = Schedule::where('name','LIKE','%'.$search.'%')->with('buses')->latest()->paginate(20);
        $routes = Route::all();
        return view('adminpages.Schedules',['schedules' => $schedules], compact('schedules', 'routes'));
    }
}
