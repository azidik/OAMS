@extends('layout')

@section('content')
<h1>Register Animal</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ url('animal_registration') }}" method="POST" class="col-md-4">

    @include('animal_registration.form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
