@extends('layout')
<title>M&M | Contact Us</title>
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
               <div class="rowleftright">
                  <div class="card-body left-body">
                     <div class="title">
                        <h2>Contact Us</h2>
                     </div>
                     <div class="contactInfo">
                        <div class="icon">
                        <span class="fa fa-map-marker"></span><span class="label">Address:</span>
                        </div>
                        <div class="text">
                           <p>PTD 64888, Jalan Selatan Utama, KM 15, Off, Skudai Lbh, 81300 Skudai, Johor</p>
                        </div>
                        
                        <div class="icon">
                           <span class="fa fa-phone"></span><span class="label">Phone:</span>
                        </div>
                        <div class="text">
                           <p> + 1235 2355 98 </p>
                        </div>
                        
                        <div class="icon">
                        <span class="fa fa-paper-plane"></span><span class="label">Email:</span>
                        </div>
                        <div class="text">
                           <p><span>www.google.com.my</span></p>
                        </div>

                     </div>
                  </div>
                  <div class="card-body right-body">
                     @if(Session::has('success'))
                     <div class="alert alert-success">
                     {{ Session::get('success') }}
                     </div>
                     @endif
                     <div class="forms">
                        <form method="post" action="{{route('contact.store')}}">
                           {{csrf_field()}} 
                        <div class="row right">
                           <div class="col-md-12">
                              <h2>Send us Feedback</h2>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Name:</label> -->
                                 <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="NAME" name="name">
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Email:</label> -->
                                 <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="EMAIL" name="email">
                                 @error('email')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div> 
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label> Phone Number: </label> -->
                                 <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="PHONE NUMBER" name="phone">
                                 @error('phone_number')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Message:</label> -->
                                 <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Your Feedback" name="message" rows="5"></textarea>
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
                              <button type="submit" class="btn btn-primary send">Send</button>
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
   </div>
</div>
</body>

<br>
@endsection