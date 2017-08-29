@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Users</h1>
<hr>


<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->user_id}}</td>
            <td>{{$user->username}}</td>
            <td>{{ $user->last_name . ', ' . $user->first_name }}</td>
            <td>{{$user->email}}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->contact_no }}</td>
            <td><a href="{{ route('users.show', $user->user_id) }}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
