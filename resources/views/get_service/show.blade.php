@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="get_id">ID:</label>
            <input type="text" name="get_id" id="get_id" class="form-control" value="{{ old('get_id', $get->get_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="get_service_type">Type of Service:</label>
            <select name="get_service_type" id="get_service_type" class="form-control" readonly>
                @foreach($types as $type)

                    @if($type->service_id === $get->get_service_type)
                    <option value="{{ $type->service_id}}" selected="">
                        {{ ucfirst($type->service_type)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="get_animal_name">Animal Name:</label>
            <select name="get_animal_name" id="get_animal_name" class="form-control" readonly>
                @foreach($registers as $register)

                    @if($register->reg_animal_id === $get->get_animal_name)
                    <option value="{{ $register->reg_animal_id}}" selected="">
                        {{ ucfirst($register->reg_animal_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="get_owner">Owner:</label>
            <select name="get_owner" id="get_owner" class="form-control" readonly>
                @foreach($users as $user)

                    @if($user->user_id === $get->get_owner)
                    <option value="{{ $user->user_id}}" selected="">
                        {{ ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>
        

        <div class="form-group">
            <a href="{{ url('gets') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
