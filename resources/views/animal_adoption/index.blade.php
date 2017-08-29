@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Adoption Made</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Animal Owner</th>
            <th>Adopted Animal</th>
            <th>Adopted At</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adopts as $adopt)
        <tr>
            <td>{{$adopt->adoption_id}}</td>
            <td>{{$adopt->adoptfn->last_name . ', ' . $adopt->adoptfn->first_name}}</td>
            <td>{{$adopt->adoptani->impounding_id}}</td>
            <td>{{$adopt->adopted_at}}</td>
             <td><a href="{{ route('adopts.show', $adopt->adoption_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection