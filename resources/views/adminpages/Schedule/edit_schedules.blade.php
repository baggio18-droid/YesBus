@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Add Schedule
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
 <form method="post" action="{{ route('schedules.update', $schedules->id) }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Name</label>
 <input type="text" name="name" class="form-control" id="name" value="{{ $schedules->name }}"aria-describedby="Name" >
 </div>
 <label for="Bus">Bus</label>
 <div class="form-group">
 <select name="bus_id" class="form-control">
 @foreach ($buses as $bus)
 <option value="{{$bus->id}}">{{"$bus->name"}}</option>
 @endforeach
 </select>
 </div>
 <div class="form-group">
 <label>Departure Time</label>
 <input type="datetime-local" name = "departure_time" value = "{{ $schedules->departure_time }}" class="form-control">
 </div>
 <div class="form-group">
 <label>Scheduled Arrival Time</label>
 <input type="datetime-local" name = "scheduled_arrival_time" value = "{{ $schedules->scheduled_arrival_time }}" class="form-control">
 </div>
 <div>
 <label>Price</price>
 <input type="number" name = "price" value = "{{ $schedules->price }}" class="form-control">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection