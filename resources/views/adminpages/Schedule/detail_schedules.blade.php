@extends('layouts.tableLayout')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Bus Detail
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>Name: </b>{{$schedules->name}}</li>
 <li class="list-group-item"><b>Bus: </b>{{$schedules->buses->name}}</li>
 <li class="list-group-item"><b>Route: </b>{{$route->name}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$route->departure}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$route->destination}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$schedules->departure_time}}</li>
 <li class="list-group-item"><b>Arrival: </b>{{$schedules->scheduled_arrival_time}}</li>
 <li class="list-group-item"><b>Price: </b>{{$schedules->price}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('schedules') }}">Back</a>
 </div>
 </div>
</div>
@endsection