@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="dog_id">ID:</label>
            <input type="text" name="dog_id" id="dog_id" class="form-control" value="{{ old('dog_id', $dFood->dog_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="dfood_category">Category:</label>
            <input type="text" name="dfood_category" id="dfood_category" class="form-control" value="{{ old('dfood_category', $dFood->dfood_category) }}" readonly>
        </div>

        <div class="form-group">
            <label for="dfood_quantity">Quantity:</label>
            <input type="text" name="dfood_quantity" id="dfood_quantity" class="form-control" value="{{ old('dfood_quantity', $dFood->dfood_quantity) }}" readonly>
        </div>

        <div class="form-group">
            <label for="dfood_expiry">Expiry:</label>
            <input type="text" name="dfood_expiry" id="dfood_expiry" class="form-control" value="{{ old('dfood_expiry', $dFood->dfood_expiry) }}" readonly>
        </div>
        

        <div class="form-group">
            <a href="{{ url('dFoods') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
