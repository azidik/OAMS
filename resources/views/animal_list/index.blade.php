@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Animals</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Animal Name</th>
            <th>Animal Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lists as $list)
        <tr>
            <td>{{$list->list_id}}</td>
            <td>{{$list->animalname->reg_animal_name}}</td>
            <td>{{$list->animalowner->last_name . ', ' . $list->animalowner->first_name}}</td>
             <td><a href="{{ route('lists.show', $list->list_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
