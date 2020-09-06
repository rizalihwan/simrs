@extends('layouts.loglayout')
@section('title', 'LoginPage')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign Healty Home</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="username" name="email" type="text" class="form-control input-border-bottom @error('email') is-invalid @enderror" autocomplete="off" autofocus required>
                    <label for="username" class="placeholder">Username</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" autocomplete="off" autofocus required>
                    <label for="password" class="placeholder">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="custom-control-label" for="remember">Remember Me</label>
					</div>
				</div>
				<div class="form-action mb-3">
					<button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
				</div>
			</div>
        </div>
    </div>
</form>
@endsection
