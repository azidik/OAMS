@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="animal_name">Animal Name:</label>
            <select name="animal_name" id="animal_name" class="form-control" readonly>
                @foreach($registers as $register)

                    @if($register->reg_animal_id === $schedule->animal_name)
                    <option value="{{ $register->reg_animal_id}}" selected="">
                        {{ ucfirst($register->reg_animal_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="type_of_service">Type of Service:</label>
            <select name="type_of_service" id="type_of_service" class="form-control" readonly>
                @foreach($types as $type)

                    @if($type->service_id === $schedule->type_of_service)
                    <option value="{{ $type->service_id}}" selected="">
                        {{ ucfirst($type->service_type)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="schedule_date">Schedule Date:</label>
            <input type="text" name="schedule_date" id="schedule_date" class="form-control" value="{{ old('schedule_date', $schedule->schedule_date) }}" readonly>
        </div>

        <div class="form-group">
            <label for="owner">Owner:</label>
            <select name="owner" id="owner" class="form-control" readonly>
                @foreach($users as $user)

                    @if($user->user_id === $schedule->owner)
                    <option value="{{ $user->user_id}}" selected="">
                        {{ ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('schedules') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
