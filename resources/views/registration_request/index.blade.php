@extends('layout')

@section('content')
<div class="form-group">
    <a href="{{ url('/pending') }}" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Registration Requests</h1>

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
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($regrequests as $regrequest)
        <tr>
            <td>{{$regrequest->reg_id}}</td>
            <td>{{$regrequest->reg_animal_name}}</td>
            <td>{{$regrequest->reg_animal_species}}</td>
            <td>{{$regrequest->reg_animal_breed}}</td>
            <td>{{$regrequest->reg_animal_age}}</td>
            <td>{{$regrequest->reg_animal_gender}}</td>
            <td>{{$regrequest->reg_animal_color}}</td>
            <td>{{$regrequest->user->last_name . ', ' . $regrequest->user->first_name}}</td>
            <td>{{$regrequest->reg_requestDate}}</td>
            <td><a href="{{ action('registration_requestController@approve', $regrequest->reg_id) }}" class="btn btn-primary">Approve</a></td>
            <td><a href="{{ route('regrequests.reject', $regrequest->reg_id) }}" class="btn btn-primary">Reject</a></td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
