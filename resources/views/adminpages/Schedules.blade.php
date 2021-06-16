@extends('layouts.adminPages')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
    <h2>YesBus List</h2>
    </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('schedules.create') }}"> Input Bus Schedule Data</a>
    </div>
    </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
   
    <table class="table table-bordered">
    <tr>
    <th>Name</th>
    <th>Bus Name</th>
    <th>Route Name</th>
    <th>Price </th>
    <th>Departure Time</th>
    <th>Expected Arrival Time</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($schedules as $sche)
    <tr>
   
    <td>{{ $sche->name }}</td>
    <td>{{ $sche ->buses->name }}</td>
    @foreach ($routes as $route)
    @if ($sche->buses->route_id  == $route->id)
    <td>{{$route->name}}</td>
    @endif
    @endforeach
    <td>{{ $sche ->price }}</td>
    <td>{{ $sche ->departure_time }}</td>
    <td>{{ $sche ->scheduled_arrival_time }}</td>
    <td>
    <a class="btn btn-info" href="{{ route('schedules.show', $sche->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('schedules.edit', $sche->id) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('schedules.destroy', $sche->id) }} ">Delete</button>
    </td>
    </tr>
    @endforeach
    </table>
@endsection