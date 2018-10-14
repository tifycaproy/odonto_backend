@extends('layouts.layout_login')

@section('content')
    @if ($errors->has('email'))
        <div class="alert alert-danger" role="alert">
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        </div>
    @elseif($errors->has('password'))
        <div class="alert alert-danger" role="alert">
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        </div>
    @endif
<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="label">Email</label>
      <div class="input-group">
         <input id="email" type="email" class="form-control" placeholder="user@example.com" name="email" value="{{ old('email') }}" required autofocus>
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="label">Password</label>
      <div class="input-group">
        <input id="password" type="password" class="form-control" name="password" required placeholder="**********">
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button class="btn btn-primary submit-btn btn-block">Login</button>
    </div>
    <div class="form-group d-flex justify-content-between">
      <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Keep me signed in
        </label>
      </div>
      <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password</a>
    </div>
   {{--  <div class="form-group">
      <button class="btn btn-block g-login">
        <img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with Google</button>
    </div> --}}
    {{-- <div class="text-block text-center my-3">
      <span class="text-small font-weight-semibold">Not a member ?</span>
      <a href="{{ route('register') }}" class="text-black text-small">Create new account</a>
    </div> --}}
</form>
@endsection
