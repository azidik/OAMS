@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="list_id">ID:</label>
            <input type="text" name="list_id" id="list_id" class="form-control" value="{{ old('list_id', $list->list_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="list_name">Animal Name:</label>
            <select name="list_name" id="list_name" class="form-control" readonly>
                @foreach($registers as $register)

                    @if($register->reg_animal_id === $list->list_name)
                    <option value="{{ $register->reg_animal_id}}" selected="">
                        {{ ucfirst($register->reg_animal_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="list_owner">Owner:</label>
            <select name="list_owner" id="list_owner" class="form-control" readonly>
                @foreach($users as $user)

                    @if($user->user_id === $list->list_owner)
                    <option value="{{ $user->user_id}}" selected="">
                        {{ ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('lists') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
