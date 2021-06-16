@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Orders
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('orders.update', $orders->id) }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Customer Name</label>
 <input type="text" name="CustomerName" class="form-control" id="name" value="{{ $orders->CustomerName }}"aria-describedby="Name" >
 </div>
 <label for="Bus">Schedule</label>
 <div class="form-group">
 <select name="schedule_id" class="form-control">
 <option disabled selected value="{{$orders->schedules->id}}">Schedule: {{$orders->schedules->name}}</option>
 @foreach ($schedule as $s)
 <option value="{{$s->id}}">Schedule: {{"$s->name"}} - Route: {{"$route->name"}}</option>
 @endforeach
 </select>
 </div>
 <div class="form-group">
 <label>Email: {{ $orders->email }}</label>
 <input type="email" name = "email" value = "{{ $orders->email }}" class="form-control">
 </div>
 <div>
 <label>Phone</label>
 <input type="text" name = "phone" value = "{{ $orders->phone }}" class="form-control">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection