@include('templates.partials._head')

<div class="login">
	<h1><a href="index.html">Masjid Sibalul Huda </a></h1>
	<h3 align="center">Admin Login</h3>
	<div class="login-bottom">
		<form method="POST" action="{{ route('login') }}">
			@csrf

			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

					@if ($errors->has('password'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-6 offset-md-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
						</label>
					</div>
				</div>
			</div>

			<div class="col-md-3">&nbsp;</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="{{ __('Login') }}">
				</label>

				<a class="news-letter " href="{{ route('password.request') }}">
					<label class="checkbox1">Forget Password ?</label>
				</a>

			</div>
			<div class="col-md-3">&nbsp;</div>





			
		</form>
	</div>
</div>