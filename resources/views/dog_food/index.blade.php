@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Dog Food</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Expiry</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dFoods as $dFood)
        <tr>
            <td>{{$dFood->dog_id}}</td>
            <td>{{$dFood->dfood_category}}</td>
            <td>{{$dFood->dfood_quantity}}</td>
            <td>{{$dFood->dfood_expiry}}</td>
            <td><a href="{{ route('dFoods.show', $dFood->dog_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
