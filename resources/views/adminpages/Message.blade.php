@extends('layouts.adminPages')
@section('content')
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
      <h2 style="text-align: center">Feedback From Users</h2>
    <div class="p-5 m-3">
        <table id="table">
        <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th width="150px">Action</th>
        </tr>
        
        @foreach ($messages as $msg)
        <tr>
       
        <td>{{ $msg->firstname }}</td>
        <td>{{ $msg ->email }}</td>
        <td>{{ $msg ->subject }}</td>
        <td>{{ $msg ->messages }}</td>
        <td>
        <a class="btn btn-danger" href="{{ route('messages.destroy', $msg->id) }} ">Delete</button></a>
        </td>
        </tr>
        @endforeach
        </table>
      </div>
  </body>
@endsection