@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Service Getters</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Get ID</th>
            <th>Type of Service</th>
            <th>Animal Name</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gets as $get)
        <tr>
            <td>{{$get->get_id}}</td>
            <td>{{$get->type->service_type}}</td>
            <td>{{$get->animalname->reg_animal_name}}</td>
            <td>{{$get->animalowner->last_name . ', ' . $get->animalowner->first_name}}</td>
            <td><a href="{{ route('gets.show', $get->get_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
