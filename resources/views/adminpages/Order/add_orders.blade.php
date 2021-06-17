@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">
    @if ($success == 1)
    <div class="alert alert-info">
        <p>Added Successfuly. <a href="{{ route('print_pdf', $orders->id) }}">Print Pdf</a></p>
    </div>
    @endif
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
 <form method="post" action="{{ route ('orders.store') }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Name">Customer Name</label>
 <input type="text" name="name" class="form-control" id="name" aria-describedby="Name" >
 </div>
 <div class="form-group">
<label for="Schedule">Schedule </label>
<select name="schedule_id" class="form-control">
    @foreach ($schedules as $s)
    <option value="{{$s->id}}">Schedule: {{"$s->name" }} </option>
    @endforeach
</select>
</div>
 <div class="form-group">
 <label>Email</label>
 <input type="email" name = "email" class="form-control">
 </div>
 <div class="form-group">
 <label>Phone</label>
 <input type="text" name = "phone" class="form-control">
 </div>
 <div>
 <button type="submit" class="btn btn-primary" >Submit
</button>
<a class="btn btn-primary" href="{{ route('Order') }}">Back</a>
  </div>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection