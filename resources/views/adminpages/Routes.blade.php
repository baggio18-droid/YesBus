@extends('layouts.adminPages')
@section('content')
<!-- 
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
    </table>
</div>
-->
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
    <h2>YesBus List</h2>
    </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('routes.create') }}"> Input Bus Route Data</a>
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
    <th>Departure</th>
    <th>Destination</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($routes as $route)
    <tr>
   
    <td>{{ $route ->name }}</td>
    <td>{{ $route ->departure }}</td>
    <td>{{ $route ->destination }}</td>
    <td>
    <a class="btn btn-primary" href="{{ route('routes.edit', $route->id) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('routes.destroy', $route->id) }} ">Delete</button>
    <a class="btn btn-info" href="{{ route('routes.show', $route->id) }}">Show</a>
    </td>
    </tr>
    @endforeach
    </table>
@endsection