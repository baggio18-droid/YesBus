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
 <strong>Whoops!</strong> There were some problems with your order.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('order.store', $orders->id) }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Customer Name</label>
 <input type="text" name="CustomerName" class="form-control" id="CustomerName" value = "{{ $orders->CustomerName }}" aria-describedby="Name" >
 </div>
 <label> Destination</label>
 <div class="form-group">
 <select name="route_id" class="form-control">
 @foreach ($routes as $route)
 <option value="{{$route->id}}">{{"$route->name"}}</option>
 @endforeach
 </select>
 </div>
 <div class="form-group">
 <label for="Name">email</label>
 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value = "{{ $orders->email }}" required autocomplete="email" autofocus>
 </div>
 <div class="form-group">
 <label>Phone Number</label>
 <input type="text" name="phone" class="form-control" id="phone" value = "{{ $orders->phone }}" aria-describedby="Name" >
 </div>
 <div>
 <label> Price </label>
 <h4 aria-describedby="Name"> {{"$orders->price"}}
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection