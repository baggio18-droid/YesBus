<!DOCTYPE html>
<html>
<head>
	<title>{{$orders->CustomerName}}'s Order Detail
    </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<h3><i>
	YesBus
	</i></h3>
	<center>
		<h5>{{$orders->CustomerName}}'s Order Detail</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Schedule</th>
				<th>Bus</th>
				<th>Route</th>
				<th>Departure</th>
                <th>Destination</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$orders->CustomerName}}</td>
				<td>{{$orders->schedules->name}}</td>
				<td>{{$orders->schedules->buses->name}}</td>
                <td>{{$route->name}}</td>
				<td>{{$route->departure}}</td>
				<td>{{$route->destination}}</td>
				<td>{{$orders->schedules->departure_time}}</td>
                <td>{{$orders->schedules->scheduled_arrival_time}}</td>
                <td>{{$orders->schedules->price}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
