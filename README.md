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
                  <div class="col-md-2 search-function">
                     <div class="input-group searchbar">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                        <button id="search-button" type="button" class="btn btn-success">
                           <i class="fas fa-search"></i>
                      </div>
                  </div>
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
    <div class="p-5 text-center bg-image" style="background-image: url('images/mainpagebgimage.jpeg');height: 680px; opacity:0.9;">      
    <div class="mask">
    <div class="d-flex justify-content-center align-items-center h-100">
    <div class="text-white">
    <h1 class="mb-3 ">Movie Moment</h1>
    <h4 class="mb-3">A user-friendly movie recommendation system</h4>
    </div>
    </div>
    </div>
    </div>
     <!-- Background image -->
    </header>
    <!--/header-->

    <!--Main-->
    <main>
      <div class="container-fluid bg-black">
      <section id="services" class="text-center text-white">
        <h2 class="my-0">Our Services</h2>
        <br>
        <div class="row justify-content-center align-items center">
          <div class="col-md-4 text-center">
            <h2>Movie Recommendation</h2>
            <p>
            We provide lots of movie recommendatiions for movie lovers to choose for their favorite movies.
            </p>
            </div>
            <div class="col-md-4"><img src="https://s29588.pcdn.co/wp-content/uploads/sites/2/2019/03/Movie_Posters_Orange_Blue_Featured-1200x806.jpg.optimal.jpg" alt="meat" class="img-fluid"></div>
        </div>
        <br>
        <div class="row justify-content-center align-items center">
          <div class="col-md-4 text-right">
            <h2>Movie Community</h2>
            <p>
            We provide a platform for movie lovers to share their experiences and opinions about movies with friends.

            </p>
            </div>
            <div class="col-md-4"><img src="https://previews.123rf.com/images/emmagraphic/emmagraphic2010/emmagraphic201000004/156608215-illustrations-of-young-business-people-sharing-their-opinions-on-brainstorming.jpg" alt="moviecommunity" class="img-fluid"></div>
        </div>
        <br>
        <div class="row justify-content-center align-items center">
          <div class="col-md-4 text-right">
            <h2>Top 10 Movie Lists (Weekly)</h2>
            <p>
            We provide Top 10 Movie lists based on the rating of movies given by our users weekly.
            With this service,our users can have idea on choosing which movies to watch to occupy their leisure time.
            </p>
            </div>
            <div class="col-md-4"><img src="https://www.whiterocklocators.com/sites/default/files/content/blog/images/top-10-part-2.jpg" alt="top10lists" class="img-fluid"></div>
        </div>
        <br>  
      </div>
      </section>
    </div>

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
