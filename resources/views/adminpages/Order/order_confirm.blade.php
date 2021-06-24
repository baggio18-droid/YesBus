@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Add Order
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
 <form method="" action="" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Customer Name</label>
 <div><b>{{$orders->CustomerName}}</b></div>
 </div>
 <div class="form-group">
 <label for="Schedule">Schedule </label>
 <div><b>{{$orders->schedules->name}}</b></div>
 </div>
 <div class="form-group">
 <label>Email</label>
 <div><b>{{$orders->email}}</b></div>
 </div>
 <div class="form-group">
 <label>Phone</label>
 <div><b>{{$orders->phone}}</b></div>
 </div>
 <div>
 <div class="form-group">
 <label>Price</label>
 <div><b>Rp. {{number_format($orders->schedules->price, 2, ',', '.')}}</b></div>
 </div>
 <div>
<a class="btn btn-primary" href="{{ route('messages.order', $orders->id) }}">Submit</a>
<a class="btn btn-primary" href="{{ route('orders.destroy', $orders->id) }}">Back</a>
  </div>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection