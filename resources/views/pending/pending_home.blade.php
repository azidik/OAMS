@extends('layout')

@section('content')
<div style="
margin-top: 7%;
">
    
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Registration</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('regrequests') }}" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="user">
                <h2>Impounding</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('imprequests') }}" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Adoption</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('adoptrequests') }}" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

  </div>
    <div class="row"></div>
</div>
@endsection
