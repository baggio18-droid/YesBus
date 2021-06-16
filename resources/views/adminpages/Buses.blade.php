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
    <div class="col-lg-10 margin-tb">
    <div class="pull-left mt-2">
    <h2>YesBus List</h2>
    </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('buses.create') }}"> Input Bus Data</a>
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
    <th>Route</th>
    <th>Category</th>
    <th>Capacity</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($buses as $bs)
    <tr>
   
    <td>{{ $bs ->name }}</td>
    <td>{{ $bs ->routes->name }}</td>
    @if( $bs-> category == 1)
    <td>Premium</td>
    @else
    <td>Regular</td>
    @endif
    <td>{{ $bs ->capacity }}</td>
    <td>
    <a class="btn btn-info" href="{{ route('buses.show', $bs->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('buses.edit', $bs->id) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('buses.destroy', $bs->id) }} ">Delete</button>
    </td>
    </tr>
    @endforeach
    </table>
@endsection