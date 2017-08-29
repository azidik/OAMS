@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Available For Adoption</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($foradopts as $foradopt)
        <tr>
            <td>{{$foradopt->impounding_id}}</td>
            <td>{{$foradopt->impounding_species}}</td>
            <td>{{$foradopt->impounding_breed}}</td>
            <td>{{$foradopt->impounding_age}}</td>
            <td>{{$foradopt->impounding_gender}}</td>
            <td>{{$foradopt->impounding_color}}</td>
            <td><a href="{{ route('foradopts.show', $foradopt->impounding_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

