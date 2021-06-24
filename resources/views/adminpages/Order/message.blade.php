@extends('layouts.tableLayout')

@section('content')
@if($success==0)
 <div class="alert alert-success">
 Cancelation Success. <br>
 Return back to <a href="/">Home</a> or <a href="{{ route('orders.create') }}">Create another order</a> <br><br>
 </div>
 @else
    <div class="alert alert-info">
        <p>Added Successfuly. <a href="{{ route('print_pdf', $orders->id) }}">Print Pdf</a></p>
        <a href="/">Return home</a>
        <br>
        <a href="{{ route('orders.create') }}">Create another order</a>
    </div>
 @endif
 @endsection