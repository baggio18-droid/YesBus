@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Add Bus
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
 <form method="post" action="{{ route('buses.store') }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Name</label>
 <input type="text" name="name" class="form-control" id="name" aria-describedby="Name" >
 </div>
 <div class="form-group">
 <label for="Category_id">Category</label>
 <select name = "category">
 <option value="0">Regular</option>
 <option value="1">Premium</option>
 </select>
 </div>
 <div class="form-group">
 <label for="Capacity">Capacity</label>
 <input type="number" name="capacity" class="form-control" id="capacity" ariadescribedby="Capacity" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection