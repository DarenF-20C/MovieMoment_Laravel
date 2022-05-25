@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/contactus.css')}}">
@endpush
<div class="row">
<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br><br>
        <h3>Contact Us</h3>
        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" >
           @csrf
           <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Your Name">
        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Your Email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Phone:</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Your Phone Number">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Message:</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
        rows="10" placeholder="Your Feedback/Message"></textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <br>
    <input type="submit" name="send" value="Submit" class="btn btn-success btn-block"> 
    <br>
    <div class="text-center follow">
                 <h1>Follow us on:</h1>
                 <button type="button" class="btn btn-primary btn-floating mx-1 fb">
                     <a href="https://www.facebook.com/Movie-Moment-MM-109810318198221"><i class="fab fa-facebook-f"></i></a>
                 </button>
               
                  <button type="button" class="btn btn-primary btn-floating mx-1 insta" >
                     <a href="https://www.instagram.com/moviemoment_2021/"><i class="fab fa-instagram"></i></a>
                  </button>
               </div>
</form>
<br>
</div>
@endsection