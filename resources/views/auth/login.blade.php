@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
<body>
	<section class="login">
		<div class="login_box">
			<div class="left"> 
				<div class="top_link"><a href="{{url('home')}}"><i class="fas fa-arrow-circle-left"></i> Return home</a></div>
                @if (session('error'))<br>  
                <div class="error">{{ session('error') }}</div>
                @endif
				<div class="contact">
					<form method="POST" action="{{ route('login') }}">
                        @CSRF
						<h3>SIGN IN</h3>
						<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<button class="submit">Log in</button><br/>
                            @if (Route::has('password.request'))
                                <a class="forgot" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="forgot register" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
					</form>
				</div>
			</div>
			<div class="right">
                <img src="/images/logoOnly.png" alt="logo">
				<div class="right-text">
					<h2>Movie Moments</h2>
					<h5></h5>
				</div>
			</div>
		</div>
	</section>
</body>
@endsection