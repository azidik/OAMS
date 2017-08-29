@extends('layout')

@section('content')
<div class="form-group">
    <a href="{{ url('/pending') }}" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Adoption Requests</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Animal Owner</th>
            <th>Adopted Animal</th>
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adoptrequests as $adoptrequest)
        <tr>
            <td>{{$adoptrequest->adopt_id}}</td>
            <td>{{$adoptrequest->adoptfn->last_name . ', ' . $adoptrequest->adoptfn->first_name}}</td>
            <td>{{$adoptrequest->adoptani->impounding_id}}</td>
            <td>{{$adoptrequest->adopt_requestDate}}</td>
            <td><a href="{{ route('adoptrequests.show', $adoptrequest->imp_id) }}" class="btn btn-primary">Approve</a></td>
            <td><a href="{{ route('adoptrequests.show', $adoptrequest->imp_id) }}" class="btn btn-primary">Reject</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection