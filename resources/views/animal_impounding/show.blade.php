@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="impounding_id">Impounding ID:</label>
            <input type="text" name="impounding_id" id="impounding_id" class="form-control" value="{{ old('impounding_id', $impound->impounding_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_category">Category:</label>
            <select name="impounding_category" id="impounding_category" class="form-control" readonly>
                @foreach($categories as $category)

                    @if($category->category_id === $impound->impounding_category)
                    <option value="{{ $category->category_id}}" selected="">
                        {{ ucfirst($category->category_type)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="impounding_name">Name:</label>
            <input type="text" name="impounding_name" id="impounding_name" class="form-control" value="{{ old('impounding_name', $impound->impounding_name) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_species">Species:</label>
            <input type="text" name="impounding_species" id="impounding_species" class="form-control" value="{{ old('impounding_species', $impound->impounding_species) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_breed">Breed:</label>
            <input type="text" name="impounding_breed" id="impounding_breed" class="form-control" value="{{ old('impounding_breed', $impound->impounding_breed) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_age">Age:</label>
            <input type="text" name="impounding_age" id="impounding_age" class="form-control" value="{{ old('impounding_age', $impound->impounding_age) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_gender">Gender:</label>
            <input type="text" name="impounding_gender" id="impounding_gender" class="form-control" value="{{ old('impounding_gender', $impound->impounding_gender) }}" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_color">Color:</label>
            <input type="text" name="impounding_color" id="impounding_color" class="form-control" value="{{ old('impounding_color', $impound->impounding_color) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_surrendered_at">Surrendered at:</label>
            <input type="text" name="impounding_surrendered_at" id="impounding_surrendered_at" class="form-control" value="{{ old('impounding_surrendered_at', $impound->impounding_surrendered_at) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_place_found">Place found:</label>
            <input type="text" name="impounding_place_found" id="impounding_place_found" class="form-control" value="{{ old('impounding_place_found', $impound->impounding_place_found) }}" readonly>
        </div>

        <div class="form-group">
            <label for="impounded_by">Impounded By:</label>
            <select name="impounded_by" id="impounded_by" class="form-control" readonly>
                @foreach($users as $user)

                    @if($user->user_id === $impound->impounded_by)
                    <option value="{{ $user->user_id}}" selected="">
                        {{ ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('impounds') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
