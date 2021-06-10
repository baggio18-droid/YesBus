@extends('layouts.tableLayout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Bus Data
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
 <form method="post" action="{{ route('buses.update', $Bus->id) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="Name">Name</label>
 <input type="text" name="name" class="form-control" id="name" value="{{ $Bus->name }}" ariadescribedby="Name" >
 </div>
 <div class="form-group">
 <label for="Category_id">Category-Id</label>
 <input type="number" name="category_id" class="form-control" id="category_id" value="{{ $Bus-
>category_id }}" aria-describedby="Name" >
 </div>
 <div class="form-group">
 <label for="Capacity">Capacity</label>
 <input type="number" name="Class" class="form-control" id="Capacity" value="{{ $Bus-
>capacity }}" aria-describedby="Capacity" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection