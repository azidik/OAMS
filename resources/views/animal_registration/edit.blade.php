@extends('layout')

@section('content')
<h1>Update Registration</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('registers.update', $animal_registration->reg_animal_id) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('animal_registration.update_form')

    
    </form>
    <div class="col-md-4"></div>
</div>

@endsection
