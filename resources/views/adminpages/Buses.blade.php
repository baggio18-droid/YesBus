@extends('layouts.tableLayout')
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
    <th>Category</th>
    <th>Capacity</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($buses as $bs)
    <tr>
   
    <td>{{ $bs ->name }}</td>
    <td>{{ $bs ->category_id }}</td>
    <td>{{ $bs ->capacity }}</td>
    <td>
    <form action="{{ route('buses.destroy',['buses'=>$bs->id]) }}" method="POST">
   
    <a class="btn btn-info" href="{{ route('buses.show',$bs->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('buses.edit',$bs->id) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>
@endsection