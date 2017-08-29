@extends('layout')

@section('content')
<div class="form-group">
    <a href="{{ url('/pending') }}" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Impounding Requests</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Category</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Found at</th>
            <th>Impounded By</th>
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($imprequests as $imprequest)
        <tr>
            <td>{{$imprequest->imp_id}}</td>
            <td>{{$imprequest->category->category_type}}</td>
            <td>{{$imprequest->impounding_species}}</td>
            <td>{{$imprequest->impounding_breed}}</td>
            <td>{{$imprequest->impounding_age}}</td>
            <td>{{$imprequest->impounding_gender}}</td>
            <td>{{$imprequest->impounding_color}}</td>
            <td>{{$imprequest->impounding_place_found}}</td>
            <td>{{$imprequest->impoundedby->last_name . ', ' . $imprequest->impoundedby->first_name}}</td>
            <td>{{$imprequest->imp_requestDate}}</td>
            <td><a href="{{ route('imprequests.show', $imprequest->imp_id) }}" class="btn btn-primary">Approve</a></td>
            <td><a href="{{ route('imprequests.show', $imprequest->imp_id) }}" class="btn btn-primary">Reject</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
