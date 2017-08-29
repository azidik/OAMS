@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Donors</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Donor ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Donated..</th>
            <th>Quantity</th>
            <th>Donated at..</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donates as $donate)
        <tr>
            <td>{{$donate->donor_id}}</td>
            <td>{{$donate->donor_last_name . ', ' . $donate->donor_first_name}}</td>
            <td>{{$donate->donor_company}}</td>
            <td>{{$donate->donated}}</td>
            <td>{{$donate->donation_quantity}}</td>
            <td>{{$donate->donated_at}}</td>
            <td><a href="{{ route('donates.show', $donate->donor_id) }}" class="btn btn-primary">Show</a></td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection
