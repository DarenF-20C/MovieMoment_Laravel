@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endpush
     <!-- Background image -->
   <div class="p-5 text-center bg-image"> 
   <div class="mask">
   <div class="d-flex justify-content-center align-items-center h-100">
   <div class="text-white">
   <div class="col-md-4">
   <img class="logomain" src="images/logo.png" alt="logo">
   <h1 class="mb-4">Movie Moment (M&M)</h1>
   <button type="button" class="buttonmain"><a href="#about">Explore More </a></button>
   <hr>  
   </div>
   </div>
   </div>
   </div>
   </div>
   <!-- Background image -->
    </header>
    <!--/header-->
    <main>
      <div class="container-fluid">
      <section id="about" class="text-center text-black">
      <br>
      <hr class="hrline">
        <h2 class="my-2"style="font-size:80px;">About Us</h2>
        <br>
        <div class="row container-in">
           <div class=col-md-1></div>
           <div class=col-md-10>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center justify-content-center align-items center "> 
                  <h2 class="my-2">Project Teams</h2>
                  <p>
                  Our small teams made up of three members which is Loh Chia Heung, Teh Jun Yuan, and Fang Xiang Lun. Three of us are students who studied Diploma in Information Technology in Southern University College.
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/projectteam.jpg" alt="projectTeam" class="img-fluid rounded-pill hover-shadow"></div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6"><img src="images/objectives.jpg" alt="objectivesGoal" class="img-fluid rounded-pill hover-shadow"></div>
               
               <div class="col-md-6 text-center"> <br><br>
                  <h2 class="my-2">Objectives/Goals</h2>
                  <p>
                  1) Provide a platform for users to share their views on movies with friends. <br>
                  2) Provide movie recommendations for users to occupy their free time. <br>
                  3) Increase the rate of efficiency of users on searching for their favorite types of movies.
                  </p> 
                  </div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center"> <br><br>
                  <h2 class="my-2">Our Services</h2>
                  <p>
                  1) Movie Community       - A place for users to chitchatting about movies with each others.<br>
                  2) Movie Recommendation  - A place for users to search for their favorite movies.  <br>
                  3) Top 10 Movie (Daily) - A place for users to look for highly rated movies.<br>
                  4) Rewards System - A place for users to redeem valuable rewards.<br>
                  To be continued...
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/picture2.jpg" class="img-fluid rounded-pill hover-shadow"></div> 
               </div><br>
            </div>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6"><img src="images/socialmedia.jpg" alt="socialmediapicture" class="img-fluid rounded-pill hover-shadow"></div>  
               <div class="col-md-6  text-center"> <br><br>
                  <h2 class="my-2">Social Media Account</h2>
                  <p>We will post the latest updates of our movie recommendation system in the following social media. Please follow us to get the latest news!
                  <br>Follow us on:<br>
                  1.<a class="links" href="https://www.facebook.com/Movie-Moment-MM-109810318198221">Facebook <i class="fab fa-facebook-f"></i></a>
                  <br>
                  2.<a class="links" href="https://www.instagram.com/moviemoment_2021/">Instagram <i class="fab fa-instagram"></i></a>
                  </p> 
                  </div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center"> <br><br>
                  <h2 class="my-2">Ideas/Inspiration</h2>
                  <p>
                  The inspiration of the name is came form a popular application in China, which is WeChat.
                  WeChat provide a platfrom for users to share their status, pictures, videos, with their friends and it is called as 
                  WeChat Moments.Our system also emphasizes in providing a platform for movie lovers to share their views about movies with each other. Therefore
                  we named is as Movie Moment (M&M).
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/ideas.jpg" class="img-fluid rounded-pill hover-shadow"></div> 
               </div><br>
            </div><br>
         </div>
    </main>

   
  </body>
  <!--/body-->
    <!-- MDB Java scripts-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>

@endsection