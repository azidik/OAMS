@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Schedules</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Animal Name</th>
            <th>Service Type</th>
            <th>Schedule Date</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($schedules as $schedule)
        <tr>
            <td>{{$schedule->animalname->reg_animal_name}}</td>
            <td>{{$schedule->type->service_type}}</td>
            <td>{{$schedule->schedule_date}}</td>
            <td>{{$schedule->animalowner->last_name . ', ' . $schedule->animalowner->first_name}}</td>
            <td><a href="{{ route('schedules.show', $schedule->animal_name) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
