@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/contactus.css')}}">
@endpush
<body><br><br><br>
<div class="container">
<div class="content">
<div class="row">
<div class="col-md-12">
<div class="card card-user">
<div class="card-header">
<h5 class="card-title">Contact Us</h5>
</div>
<div class="card-body">
@if(Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
<div class="forms">
<form method="post" action="{{route('contact.store')}}">
{{csrf_field()}}
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name:</label>
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Justin Lim" name="name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email:</label>
<input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Justinlim@gmail.com" name="email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div> 
<div class="col-md-6">
<div class="form-group">
<label> Phone Number: </label>
<input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="012-34567890" name="phone">
@error('phone_number')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Message:</label>
<textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Hi, I have faced some of the problem which is ..." name="message" rows="5"></textarea>
@error('message')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<br>
<div class="row">
<div class="update ml-auto mr-auto">
<button type="submit" class="btn btn-primary">Send</button>
<div class="text-center follow">
                 <h1>Follow us on:</h1>
                 <button type="button" class="btn btn-secondary btn-floating mx-1 fb">
                     <a href="https://www.facebook.com/Movie-Moment-MM-109810318198221"><i class="fab fa-facebook-f"></i></a>
                 </button>
                  <button type="button" class="btn btn-secondary btn-floating mx-1 insta" >
                     <a href="https://www.instagram.com/moviemoment_2021/"><i class="fab fa-instagram"></i></a>
                  </button>
              
               </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</div>
<br>
@endsection