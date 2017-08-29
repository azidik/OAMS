@extends('layout')

@section('content')
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Report</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Report ID</th>
            <th>Category</th>
            <th>Count</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->report_id}}</td>
            <td>{{$report->report_category}}</td>
            <td>{{$report->report_Count}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
