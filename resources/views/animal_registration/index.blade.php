@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Registered Animals</h1>
<a href="{{url('/registers/create')}}" class="btn btn-success">Add Registration</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registers as $register)
        <tr>
            <td>{{$register->reg_animal_id}}</td>
            <td>{{$register->reg_animal_name}}</td>
            <td>{{$register->reg_animal_species}}</td>
            <td>{{$register->reg_animal_breed}}</td>
            <td>{{$register->reg_animal_age}}</td>
            <td>{{$register->reg_animal_gender}}</td>
            <td>{{$register->reg_animal_color}}</td>
            <td>{{$register->user->last_name . ', ' . $register->user->first_name}}</td>
             <td><a href="{{ route('registers.show', $register->reg_animal_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
