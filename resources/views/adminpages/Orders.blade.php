@extends('layouts.adminPages')
@section('content')
<div class="row">
    <div class="col-lg-10 margin-tb">
    <div class="pull-left mt-2">
    <h2>YesBus List</h2>
    </div>
    <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('orders.create') }}"> Input Bus Data</a>
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
    <th>Customer Name</th>
    <th>Bus Route</th>
    <th>Schedule</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th width="250px">Action</th>
    </tr>
    @foreach ($orders as $ord)
    <tr>
    <td>{{ $ord ->CustomerName }}</td>
    @foreach ($schedules as $schedule)
        @if ($schedule->id == $ord->schedule_id)
            @foreach ($routes as $route)
                @if ($schedule->buses->route_id == $route->id)
                    <td>Bus: {{ $schedule->buses->name }}, Route: {{$route->name}}</td>
                    @break
                @endif
            @endforeach
            <td>{{ $schedule->name  }}</td>
            @break
        @endif
    @endforeach
    <td>{{ $ord ->email }}</td>
    <td>{{ $ord ->phone }}</td>
    <td>
        <a class="btn btn-info" href="{{ route('orders.show', $ord->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('orders.edit', $ord->id) }}">Edit</a>
        <a class="btn btn-danger" href="{{ route('orders.destroy', $ord->id) }} ">Delete</button>
    </td>
    </tr>
    @endforeach
    </table>
@endsection
