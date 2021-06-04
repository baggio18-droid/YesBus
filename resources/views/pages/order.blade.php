@extends('layout.app')
@section('content')
</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h1>All Information About Orders</h1>

@foreach ($orders as $order)
<li> {{ $order}}  </li>
@endforeach



</body>
</html>
@endsection