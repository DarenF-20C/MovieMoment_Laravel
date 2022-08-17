@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endpush
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="{{route('login')}}"><i class="fas fa-arrow-circle-left"></i> Return</a></div>
                @if (session('error'))<br>  
                <div class="error">{{ session('error') }}</div>
                @endif
                <div class="contact">
					<form method="POST" action="{{ route('register') }}">
                        @CSRF
						<h3>Register</h3>
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="USERNAME">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="PASSWORD">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRM PASSWORD">
						
				</div>
			</div>
			<div class="right">
				<div class="right-text">
                <label for="tel" class="">{{ __('Phone:') }}</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}" required placeholder="012-3456789"><br/>
                    <label for="date" class="">{{ __('DOB: ') }}</label>
                        <input type="date" id="date" name="date" required size="65"><br />
                    <label for="file" class="">{{ __('Avatar:') }}</label>
                    <input type="file" class="form-control" id="userAvatar" name="userAvatar" required><br/>
                        @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    <label for="gender" class="">{{ __('Gender:') }}</label>
                        <select name="gender" id="gender">
                            <option option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    
                    <button class="submit">Sign Up</button>
				</div>
			</div>
		</div>
        </form>
	</section>
</body>
@endsection
