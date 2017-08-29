@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cat_id">ID:</label>
            <input type="text" name="cat_id" id="cat_id" class="form-control" value="{{ old('cat_id', $cFood->cat_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="cfood_category">Category:</label>
            <input type="text" name="cfood_category" id="cfood_category" class="form-control" value="{{ old('cfood_category', $cFood->cfood_category) }}" readonly>
        </div>

        <div class="form-group">
            <label for="cfood_quantity">Quantity:</label>
            <input type="text" name="cfood_quantity" id="cfood_quantity" class="form-control" value="{{ old('cfood_quantity', $cFood->cfood_quantity) }}" readonly>
        </div>

        <div class="form-group">
            <label for="cfood_expiry">Expiry:</label>
            <input type="text" name="cfood_expiry" id="cfood_expiry" class="form-control" value="{{ old('cfood_expiry', $cFood->cfood_expiry) }}" readonly>
        </div>
        

        <div class="form-group">
            <a href="{{ url('cFoods') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
