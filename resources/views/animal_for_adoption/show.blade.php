@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="impounding_id">ID:</label>
            <input type="text" name="impounding_id" id="impounding_id" class="form-control" value="{{ old('impounding_id', $adopt->impounding_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_species">Species:</label>
            <input type="text" name="impounding_species" id="impounding_species" class="form-control" value="{{ old('impounding_species', $adopt->impounding_species) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_breed">Breed:</label>
            <input type="text" name="impounding_breed" id="impounding_breed" class="form-control" value="{{ old('impounding_breed', $adopt->impounding_breed) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_age">Age:</label>
            <input type="text" name="impounding_age" id="impounding_age" class="form-control" value="{{ old('impounding_age', $adopt->impounding_age) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_gender">Gender:</label>
            <input type="text" name="impounding_gender" id="impounding_gender" class="form-control" value="{{ old('impounding_gender', $adopt->impounding_gender) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_color">Color:</label>
            <input type="text" name="impounding_color" id="impounding_color" class="form-control" value="{{ old('impounding_color', $adopt->impounding_color) }}" readonly>
        </div>

        <div class="form-group">
            <a href="{{ url('foradopts') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
