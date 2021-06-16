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
 <li class="list-group-item"><b>Name: </b>{{$routes->name}}</li>
 <li class="list-group-item"><b>Departure: </b>{{$routes->departure}}</li>
 <li class="list-group-item"><b>Destination: </b>{{$routes->destination}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('routes') }}">Back</a>
 </div>
 </div>
</div>
@endsection