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
 <li class="list-group-item"><b>Name: </b>{{$buses->name}}</li>
 @if($buses->category)
 <li class="list-group-item"><b>Category: </b>Premium</li>
 @else
 <li class="list-group-item"><b>Category: </b>Regular</li>
 @endif
 <li class="list-group-item"><b>Capacity: </b>{{$buses->capacity}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('buses') }}">Back</a>
 </div>
 </div>
</div>
@endsection