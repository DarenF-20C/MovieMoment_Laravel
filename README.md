<!DOCTYPE html>
<html lang="en">
    <!--Head-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Movie Moment (M&M)</title>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
        <!--logo-->
        <link rel="icon" href="images/logo.png">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
        <!--Own Css -->
        <link rel="stylesheet" type="text/css" href="/main.css"  />
        <link rel="stylesheet" type="text/css" href="/welcome.css"  />
  </head>
  <!--/Head-->
    <body>
      <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

        <header>
        <!-- Navbar -->
        <!-- M&M Logo-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <a class="navbar-brand" href="#">
              <img src="/images/logoHeader.jpg" height="50px" alt="M&M Logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div style="width:100%; margin:0 auto;">
                     <!-- Center Navigation -->
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                           <a class="nav-link {{Route::currentRouteNamed('community') ? 'active' : '' }}" href="{{url('community')}}" class="text-dark"><i class="fas fa-comments"></i> Movie Community  </a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link {{Route::currentRouteNamed('movieRecommendation') ? 'active' : '' }} {{Route::currentRouteNamed('familyMovie') ? 'active' : '' }} {{Route::currentRouteNamed('tvshow') ? 'active' : '' }} dropdown-toggle" href="#" ></i> <i class="fas fa-video"></i> Movie Recommendation</a>
                              <ul class="dropdown-menu">
                              <li><a class="dropdown-item {{Route::currentRouteNamed('movieRecommendation') ? 'active' : '' }}" href="#">Popular Movies</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('familyMovie') ? 'active' : '' }}" href="#">Family Movies</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('tvshow') ? 'active' : '' }}" href="{{url('tvshow')}}">TV Shows</a></li>
                               </ul>
                           </li>
                           
                           <li class="nav-item">
                           <a class="nav-link {{Route::currentRouteNamed('top10') ? 'active' : '' }} {{Route::currentRouteNamed('top10TV') ? 'active' : '' }}  dropdown-toggle " href="{{url('top10')}}"><i class="fas fa-crown"></i> Top 10 Movie (Daily)  </a>         
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item {{Route::currentRouteNamed('top10') ? 'active' : '' }}" href="{{url('top10')}}">Movie Lists</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('top10TV') ? 'active' : '' }}" href="{{url('top10TV')}}">TV Shows</a></li>
                               </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link dropdown-toggle {{Route::currentRouteNamed('showRewards') ? 'active' : '' }} {{Route::currentRouteNamed('listMembers') ? 'active' : '' }} {{Route::currentRouteNamed('showMyReward') ? 'active' : '' }} {{Route::currentRouteNamed('userGuide') ? 'active' : '' }} {{Route::currentRouteNamed('contactUs') ? 'active' : '' }}"></i>Others</a>
                                 <ul class="dropdown-menu">
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('listMembers') ? 'active' : '' }} " href="{{url('showProjectMembers')}}">Project Members</a></li>
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('userGuide') ? 'active' : '' }}" href="{{url('userGuide')}}">User Guide / FAQ</a></li>
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('showRewards') ? 'active' : '' }} {{Route::currentRouteNamed('searchRewards') ? 'active' : '' }}" href="{{url('showRewards')}}">Rewards Redeem</a></li>
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('myReward') ? 'active' : '' }} {{Route::currentRouteNamed('showMyReward') ? 'active' : '' }}" href="{{url('myReward')}}">My Rewards</a></li>
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('contactUs') ? 'active' : '' }}" href="{{url('contactUs')}}">Contact Us</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  </div>
            </div>  

 <!-- Right elements of navbar -->
 <div class="nav-item align-items-center ">
               <!-- Login Avatar -->
               <a class="nav-link dropdown-toggle hidden-arrow avatar" href="#" >
                <i class="fas fa-user"></i>
               </a>
               <ul class="dropdown-menu navbar-nav right-nav">
                <li>
                    <a class="dropdown-item profilemenu" href="{{ route('userProfile') }}">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                     </form>
                </li>
               </ul>
               
            </div>
            <!-- END Right elements -->
         </nav>
         <!-- END navbar -->
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

        <body>
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
                  3) Provide movie trends for users to follow up.
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
         <!-- MDB Java scripts-->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>

    
        <footer>
            <div class="footer-copyright text-center text-light bg-dark ">
            &copy;2021-2022 by Movie Moment(M&M).com. </br>
            All rights reserved.
            </div>
        </footer>
    </body>
</html>
