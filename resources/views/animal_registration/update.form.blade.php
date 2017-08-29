{{ csrf_field() }}

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="reg_animal_name">Name:</label>
    <input type="text" name="reg_animal_name" id="reg_animal_name" placeholder="Animal Name" class="form-control" value="{{ old('reg_animal_name', $register->reg_animal_id) }}">
</div>

<div class="form-group">
    <label for="reg_animal_species">Species:</label>
    <input type="text" name="reg_animal_species" id="reg_animal_species" placeholder="Animal Species" class="form-control" value="{{ old('reg_animal_species', $register->reg_animal_species) }}">
</div>

<div class="form-group">
    <label for="reg_animal_breed">Breed:</label>
    <input type="text" name="reg_animal_breed" id="reg_animal_breed" placeholder="Animal Breed" class="form-control" value="{{ old('reg_animal_breed', $register->reg_animal_breed) }}">
</div>
<div class="form-group">
    <label for="reg_animal_age">Age:</label>
    <input type="text" name="reg_animal_age" id="reg_animal_age" placeholder="Animal Age" class="form-control" value="{{ old('reg_animal_age', $register->reg_animal_age) }}">
</div>
<div class="form-group">
    <label for="reg_animal_gender">Gender:</label>
    <input type="text" name="reg_animal_gender" id="reg_animal_gender" placeholder="Animal Gender" class="form-control" value="{{ old('reg_animal_gender', $register->reg_animal_gender) }}">
</div>
<div class="form-group">
    <label for="reg_animal_color">Color:</label>
    <input type="text" name="reg_animal_color" id="reg_animal_color" placeholder="Animal Color" class="form-control" value="{{ old('reg_animal_color', $register->reg_animal_color) }}">
</div>

<div class="form-group">
    <label for="animal_owner">Animal Owner:</label>
    <select name="animal_owner" id="animal_owner" placeholder="Name of Animal Owner" class="form-control">
        <option value=""></option>
        @foreach($users as $user)
            @if($user->user_id === $register->animal_owner)
            <option value="{{ $user->user_id }}" selected="">{{ ucfirst($user->last_name) . ', ' . ucfirst($user->first_name) }}</option>
            @else
            <option value="{{ $user->user_id}}">
            {{ ucfirst($user->last_name) . ', ' . ufirst($user->first_name)}}
            </option>
            @endif

        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
