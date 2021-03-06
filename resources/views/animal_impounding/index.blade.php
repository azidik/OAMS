@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Impounds</h1>
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
            <th>Surrendered at</th>
            <th>Found at</th>
            <th>Impounded By</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($impounds as $impound)
        <tr>
            <td>{{$impound->impounding_id}}</td>
            <td>{{$impound->category->category_type}}</td>
            <td>{{$impound->impounding_species}}</td>
            <td>{{$impound->impounding_breed}}</td>
            <td>{{$impound->impounding_age}}</td>
            <td>{{$impound->impounding_gender}}</td>
            <td>{{$impound->impounding_color}}</td>
            <td>{{$impound->impounding_surrendered_at}}</td>
            <td>{{$impound->impounding_place_found}}</td>
            <td>{{$impound->impoundedby->last_name . ', ' . $impound->impoundedby->first_name}}</td>
            <td><a href="{{ route('impounds.show', $impound->impounding_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
