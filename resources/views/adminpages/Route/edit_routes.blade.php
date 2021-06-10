@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Bus Data
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
 <form method="post" action="{{ route('routes.update', $routes->id) }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Name</label>
 <input type="text" name="name" class="form-control" id="name" value="{{ $routes->name }}" ariadescribedby="Name" >
 </div>
 <div class="form-group">
 <label for="Name">Departure</label>
 <input type="text" name="departure" class="form-control" id="departure" value="{{ $routes->departure }}" aria-describedby="Name" >
 </div>
 <div class="form-group">
 <label for="Name">Destination</label>
 <input type="text" name="destination" class="form-control" id="destination" value="{{ $routes->destination }}" aria-describedby="Name" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection