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
 <li class="list-group-item"><b>Name: </b>{{$Bus->name}}</li>
 <li class="list-group-item"><b>Category: </b>{{$Bus->category_id}}</li>
 <li class="list-group-item"><b>Capacity: </b>{{$Bus->capacity}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('buses.index') }}">Back</a>
 </div>
 </div>
</div>
@endsection