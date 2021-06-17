@extends('layouts.yesbus')
@section('content')
<!DOCTYPE html>
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
<body>
    <div class="gtco-loader"></div>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets/images/image_12.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Schedules</h1>	
						</div>						
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="container" style="margin-top: 5rem">
    <form action="{{route('Schedules')}}" method="GET" role="search" >
        {{ csrf_field() }}
        <div class="form-group" style="display: flex; gap:10px; justify-content: space-around">
            <input  type="text" class="form-control" name="search" placeholder="Search schedule">
            <button type="submit" class="btn btn-sm btn-success float-right">Search</button>
          </div>
    </form>
    </div>
    <div class="p-5 m-3">
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
      </div>
</body>

</html>
@endsection