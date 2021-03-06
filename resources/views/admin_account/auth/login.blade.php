@extends('layout')

@section('content')
    

 <div class="container-fluid">
 <div class="row">

 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-heading">Login</div>
 <div class="panel-body">
                    
     <!-- @if (count($errors) > 0)
     <div class="alert alert-danger">
     <strong>Whoops! </strong> There were some problems with your input. <br> <br>
     <ul>
    
            @foreach ($errors->all() as $error)
         <li>{{ $error }} </li>
        @endforeach
     </ul>
     </div>
     @endif -->

 <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
<!-- username -->
 <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}" >
    <label class="col-md-4 control-label" for="username">Username</label>
    <div class="col-md-6">
        <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>
<!-- password -->
<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}" >
    <label class="col-md-4 control-label" for="password">Password</label>
    <div class="col-md-6">
        <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Login
        </button>

        <a href="{{ url('/password/reset') }}">Forgot Your Password? </a>

    </div>
</div>
</form>
<button href="{{ url('/register') }}" class="btn btn-primary" style="margin-right: 15px;">Register
        </button>
</div>
</div>
</div>
</div>
</div>

@endsection