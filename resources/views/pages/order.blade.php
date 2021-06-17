@extends('layouts.yesbus')
@section('content')
<!DOCTYPE HTML>
<html>
	<body>		
	<div class="gtco-loader"></div>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets/images/image_11.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Get Your Tickets and check your Orders Here!</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
        <h2>Upcoming Bus </h2>
    </div>
    <div style="overflow-x:auto;">
    <style>
        #table  {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #table td, #table th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #table tr:nth-child(even){background-color: #f2f2f2;}
        
        #tble tr:hover {background-color: #ddd;}
        
        #table th {
          padding-top: 7px;
          padding-bottom: 7px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
        </div>
   
    <table id="table">
    <tr>
    <th>Day</th>
    <th>Bus Name</th>
    <th>Departure</th>
    <th>Destination</th>
    <th>Price </th>
    <th>Departure Time</th>
    <th>Expected Arrival Time</th>
    </tr>
    
    @foreach ($schedules as $sche)
    <tr>
   
    <td>{{ $sche->name }}</td>
    <td>{{ $sche ->buses->name }}</td>
    @foreach ($routes as $route)
    @if ($sche->buses->route_id  == $route->id)
    <td>{{$route->departure}}</td>
    @endif
    @endforeach
    @foreach ($routes as $route)
    @if ($sche->buses->route_id  == $route->id)
    <td>{{$route->destination}}</td>
    @endif
    @endforeach
    <td>{{ $sche ->price }}</td>
    <td>{{ $sche ->departure_time }}</td>
    <td>{{ $sche ->scheduled_arrival_time }}</td>
    </tr>
    @endforeach
    </table>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>New Order: </h2>
					<div style="float: middle; margin: 5px">
                        <a class="btn btn-sm btn-dark" data-bs-toggle="modal" href="{{route('orders.store')}}"><i class="fa fa-ticket" aria-hidden="true"></i>Order tickets</a>
                    </div>
                    <!--
                        
                    -->
				</div>
			</div>
        </div>
    </div>
@endsection