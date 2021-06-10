@extends('layouts.adminPages')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
    <h2>YesBus List</h2>
    </div>
    <div class="float-right my-2">
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
    <th width="280px">Email</th>
    <th>Phone Number</th>
    </tr>
    @foreach ($orders as $ord)
    <tr>
    <td>{{ $ord ->CustomerName }}</td>
    <td>{{ $ord ->routes->name }}</td>
    <td>{{ $ord ->email }}</td>
    <td>{{ $ord ->phone }}</td>
    </tr>
    @endforeach
    </table>
@endsection