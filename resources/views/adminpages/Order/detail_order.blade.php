@extends('layouts.tableLayout')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Order Detail
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>Name: </b>{{$orders->CustomerName}}</li>
 <li class="list-group-item"><b>Schedule: </b>{{$orders->schedules->name}}</li>
 <li class="list-group-item"><b>Bus: </b>{{$orders->schedules->buses->name}}</li>
 <li class="list-group-item"><b>Route: </b>{{$route->name}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$route->departure}}</li>
 <li class="list-group-item"><b>Destination: </b>{{$route->destination}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$orders->schedules->departure_time}}</li>
 <li class="list-group-item"><b>Arrival: </b>{{$orders->schedules->scheduled_arrival_time}}</li>
 <li class="list-group-item"><b>Price: </b>{{$orders->schedules->price}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('order') }}">Back</a>
 <a class="btn btn-success mt-3" style="background-color: #008CBA;" href="{{ route('print_pdf', $orders->id) }}">Print PDF</a>
 </div>
 </div>
</div>
@endsection
