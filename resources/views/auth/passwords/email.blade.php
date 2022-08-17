@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/ForgetPassword.css')}}">
@endpush
<body>
<section class="login">
<div class="login_box">
<div class="left">
<div class="top_link"><a href="{{route('login')}}"><i class="fas fa-arrow-circle-left"></i> Return</a></div>
<br><br><br><br><br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="contact">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h3>Reset Password</h3>
                        <div class="row mb-3">
                        <label for="email" class="col-md-12">{{ __('Please enter your email address:') }}</label>
                        <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                        <button type="submit" class="submit">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                    </form>
                </div>
            </div>
              </div>
            <div class="right">
            <img src="/images/logoOnly.png" alt="logo" class="img">
				<div class="right-text">
					<h2>Movie Moment</h2>
				</div>
			</div>
    </div>
</div>
</div>
</div>
</section>
</body>
@endsection
