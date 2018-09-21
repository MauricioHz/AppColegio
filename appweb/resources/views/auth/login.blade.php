@extends('layouts.auth')
@section('content')
<div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card py-3 shadow-lg">
              <div class="card-body">
                <h1 class="h2 text-center">Iniciar sesión</h1>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <small>* Password must be at least 8 characters</small>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">I agree to the
                        <a href="#">Terms &amp; Conditions</a>
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-block btn-lg btn-primary" type="submit">Iniciar sesión</button>
                </form>
                <div class="text-center text-small mt-3">
                  <span>Already have an account? <a href="#">Log in here</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
