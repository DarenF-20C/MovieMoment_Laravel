@extends('layout')
@section('content')
@push('css')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endpush
<body>
<div id="intro">
            <div class="mask rgba-white-strong">
               <h4 class="my-5 text-center font-weight-bold ">Contact Us </h4>
               <p class="white-text text-center font-weight-bold">If you interested to join us , feel free to send your information to us.</p>
               <div class="buttoncenter">
                  <button type="button" class="buttondesign btn-rounded"><a href="#formapp" class="fontcolors">Fill up to contact with us!</a></button>  
               </div>
            </div>
         </div>
    </header>

   <div class="container1">
      <div class="row company" id="content">
         <div class="col-md-4 mb-4 text-center">
            <h3 class="feature-title">Company Logo</h3>
            <img src="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/door-company-logo.jpg" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. </p>
         </div>
         <div class="col-md-4 mb-1 text-center">
            <h3 class="feature-title">Company Slogan </h3>
            <img src="https://www.aplustopper.com/wp-content/uploads/2020/11/5-Slogans-on-Company-in-English.png" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. </p>
         </div>
         <div class="col-md-4 mb-1 text-center">
            <h3 class="feature-title">Company Bonus </h3>
            <img src="https://theea.org/wp-content/uploads/2018/11/Company-Bonus-Hot-Topic-Survey-Image-for-Website.png" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu.</p>
         </div>
         <hr class="hr-light">
   </div>

   <div class="row container2">
      <div class="col-md-6 mb-1 text-center hire">
         <h3 class="feature-title">Hiring People </h3>
         <img src="https://i.pinimg.com/564x/90/c7/a6/90c7a6b46a35e461e63d4ca4bd2dbc82.jpg">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu.</p>
      </div>
      <div class="col-md-6 mb-1 text-center">
         <h5 class="feature-title">If you are interested in joining our our teams, fill the form below! </h5>
            <form id="formapp" onsubmit="thanksyou()">
               <div class="row form">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                     <div class="card">
                        <!-- Name input -->
                        <div class="form-outline mb-2">
                           <input type="text" id="form3Example1" class="form-control" />
                           <label class="form-label" for="form3Example1">Name</label>
                        </div>

                        <!-- Phone input -->
                        <div class="form-outline mb-2">
                           <input type="text" id="form3Example2" class="form-control" />
                           <label class="form-label" for="form3Example1">Phone</label>
                        </div>
                     
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                           <input type="email" id="form3Example3" class="form-control" />
                           <label class="form-label" for="form3Example3">Email address</label>
                        </div>
                     
                        <!-- Password input -->
                        <div class="form-outline mb-2">
                           <input type="number" id="form3Example4" class="form-control" />
                           <label class="form-label" for="form3Example4">Age</label>
                        </div>

                        <!-- Extra input -->
                        <div class="form-outline mb-0">
                           <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                           <label class="form-label" for="form6Example7">Why did you choose us?</label>
                        </div>


                     </div>
                  </div>
                  <div class="col-md-1"></div>
               </div>
             
               <!-- Submit button -->
               <button type="submit" class="btn btn-success mb-4">Sign up</button>
             
               <!-- Register buttons -->
               <div class="text-center follow">
                 <p>Follow us on:</p>
                 <button type="button" class="btn btn-primary btn-floating mx-1 fb">
                     <a href="https://www.facebook.com/Movie-Moment-MM-109810318198221"><i class="fab fa-facebook-f"></i></a>
                 </button>
               
                  <button type="button" class="btn btn-primary btn-floating mx-1 insta" >
                     <a href="https://www.instagram.com/moviemoment_2021/"><i class="fab fa-instagram"></i></a>
                  </button>
               </div>
             </form>
      </div>
   </div>
   </div>
</body>
@endsection