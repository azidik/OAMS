@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Cat Food</h1>
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
        @foreach($cFoods as $cFood)
        <tr>
            <td>{{$cFood->cat_id}}</td>
            <td>{{$cFood->cfood_category}}</td>
            <td>{{$cFood->cfood_quantity}}</td>
            <td>{{$cFood->cfood_expiry}}</td>
            <td><a href="{{ route('cFoods.show', $cFood->cat_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
