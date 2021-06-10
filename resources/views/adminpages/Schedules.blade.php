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
    <th>Bus ID</th>
    <th>Departure Time</th>
    <th> Expected Arrival Time</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($schedules as $sche)
    <tr>
   
    <td>{{ $sche->buses->name }}</td>
    <td>{{ $sche ->bus_id }}</td>
    <td>{{ $sche ->departure_time }}</td>
    <td>{{ $sche ->scheduled_arrival_time }}</td>
    <td>
    <form action="{{ route('buses.destroy', $bs->id) }}" method="POST">
   
    <a class="btn btn-info" href="{{ route('buses.show', $bs->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('buses.edit', $bs->id) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('buses.destroy', $bs->id) }} ">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>
@endsection