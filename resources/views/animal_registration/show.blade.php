@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="reg_animal_id">ID:</label>
            <input type="text" name="reg_animal_id" id="reg_animal_id"  class="form-control" value="{{ old('reg_animal_id', $register->reg_animal_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_name">Name:</label>
            <input type="text" name="reg_animal_name" id="reg_animal_name"  class="form-control" value="{{ old('reg_animal_name', $register->reg_animal_name) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_species">Species:</label>
            <input type="text" name="reg_animal_species" id="reg_animal_species" class="form-control" value="{{ old('reg_animal_species', $register->reg_animal_species) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_breed">Breed:</label>
            <input type="text" name="reg_animal_breed" id="reg_animal_breed"  class="form-control" value="{{ old('reg_animal_breed', $register->reg_animal_breed) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_age">Age:</label>
            <input type="text" name="reg_animal_age" id="reg_animal_age" class="form-control" value="{{ old('reg_animal_age', $register->reg_animal_age) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_gender">Gender:</label>
            <input type="text" name="reg_animal_gender" id="reg_animal_gender" class="form-control" value="{{ old('reg_animal_gender', $register->reg_animal_gender) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_animal_color">Color:</label>
            <input type="text" name="reg_animal_color" id="reg_animal_color" class="form-control" value="{{ old('reg_animal_color', $register->reg_animal_color) }}" readonly>
        </div>

        <div class="form-group">
            <label for="reg_owner">Animal Owner:</label>
            <select name="reg_owner" id="reg_owner" class="form-control" readonly>
                @foreach($users as $user)

                    @if($user->user_id === $register->reg_owner)
                        <option value="{{ $user->user_id }}" selected="">{{ ucfirst($user->last_name) . ', ' .
                        ucfirst($user->first_name)}}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('registers') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
