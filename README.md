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
    <link rel="stylesheet" href="css/main.css">
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
  </head>
  <!--/Head-->

  <!-- Body -->
  <body>
  <!--Header-->
  <header>
      <!-- Navbar -->
         <!-- M&M Logo-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <a class="navbar-brand" href="index.html">
              <img src="Images/logoHeader.jpg" height="50px" alt="M&M Logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-9">
                     <div style="width:100%; margin:0 auto;">
                     <!-- Center Navigation -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a class="nav-link" href="community.html" class="text-dark"><i class="fas fa-comments"></i> Movie Community  </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="Recommendationpage.html"><i class="fas fa-video"></i> Movie Recommendation  </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="top10.html"><i class="fas fa-crown"></i> Top 10 Movie (Weekly)  </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link dropdown-toggle" href="#" ></i> About</a>
                                 <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="AboutUs.html"> About Us</a></li>
                                 <li><a class="dropdown-item" href="ContactUs.html"> Contact Us</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- search bar -->
                  
               </div>
            </div>  

            <!-- Right elements of navbar -->
            <div class="d-flex align-items-center ">
               <!-- Notifications -->
               <a class="text-reset me-3 dropdown-toggle hidden-arrow notice" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  <i class="far fa-bell"></i>
                  <span class="badge rounded-pill badge-notification bg-danger">1</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                     <li>
                        <a class="dropdown-item" href="#">Latest Movie Release</a>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">Community Message</a>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">Comments</a>
                     </li>
                  </ul>
         
               <!-- Login Avatar -->
               <a class="dropdown-toggle d-flex align-items-center hidden-arrow avatar" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Logout</a>
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
   <button type="button" class="buttonmain">Explore More</button>    
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
        <h2 class="my-2"style="font-size:80px;">About Us</h2>
        <br>
        <div class="row container-in">
           <div class=col-md-1></div>
           <div class=col-md-10>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center justify-content-center align-items center "> 
                  <h2>Project Teams</h2>
                  <p>
                  Our small teams made up of three members which is Loh Chia Heung, Teh Jun Yuan, and Fang Xiang Lun. Three of us are students which studied Diploma in Information Technology in Southern University College.
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/projectteam.jpg" alt="projectTeam" class="img-fluid rounded-pill hover-shadow"></div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6"><img src="images/objectives.jpg" alt="objectivesGoal" class="img-fluid rounded-pill hover-shadow"></div>
               
               <div class="col-md-6 text-center"> <br><br>
                  <h2>Objectives/Goals</h2>
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
                  <h2>Our Services</h2>
                  <p>
                  1) Movie Community       - A place for users to chitchatting about movies with each others.<br>
                  2) Movie Recommendation  - A place for users to search for their favorite movies.  <br>
                  3) Top 10 Movie (Weekly) - A place for users to look for highly rated movies.<br>
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/picture2.jpg" class="img-fluid rounded-pill hover-shadow"></div> 
               </div><br>
            </div>
            <div class=col-md-1></div>
           </div>
         </div>
    </main>
   
    <!--Footer-->
    <footer>
      <div class="footer-copyright text-center text-light bg-dark ">
          &copy;2021-2022 by Movie Moment(M&M).com. </br>
          All rights reserved.
      </div>
</footer>
  </body>
  <!--/body-->
    <!-- MDB Java scripts-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
