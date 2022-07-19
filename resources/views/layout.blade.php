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
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
        @stack('css')
  </head>
  <!--/Head-->
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success')  }}
        </div>
        @endif
    
        <header>
        <!-- Navbar -->
        <!-- M&M Logo-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <a class="navbar-brand" href="{{url('')}}">
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
                              <a class="nav-link" href="{{url('community')}}" class="text-dark"><i class="fas fa-comments"></i> Movie Community  </a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link dropdown-toggle" href="{{url('movieRecommendation')}}" ></i> <i class="fas fa-video"></i> Movie Recommendation</a>
                              <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('movieRecommendation')}}">Popular Movies</a></li>
                              <li><a class="dropdown-item" href="{{url('familyMovie')}}">Family Movies</a></li>
                              <li><a class="dropdown-item" href="{{url('tvshow')}}">TV Shows</a></li>
                               </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{url('top10')}}"><i class="fas fa-crown"></i> Top 10 Movie (Weekly)  </a>          
                           </li>
                           <li class="nav-item">
                              <a class="nav-link dropdown-toggle" href="#" ></i>Others</a>
                                 <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="{{url('showProjectMembers')}}">Project Members</a></li>
                                 <li><a class="dropdown-item" href="{{url('contact')}}">User Guide</a></li>
                                 <li><a class="dropdown-item" href="{{url('contact')}}">Vouchers Redeem</a></li>
                                 <li><a class="dropdown-item" href="{{url('contact')}}">Help</a></li>
                                 <li><a class="dropdown-item" href="{{url('contact')}}">Contact Us</a></li>
                                 <li><a class="dropdown-item" href="{{url('showMembers')}}">Show Members(Admin)</a></li>
                                 <li><a class="dropdown-item" href="{{url('addMembers')}}">Add Members(Admin)</a></li>
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


    </header>
    <!--/header-->

        @yield('content')
        <footer>
            <div class="footer-copyright text-center text-light bg-dark ">
            &copy;2021-2022 by Movie Moment(M&M).com. </br>
            All rights reserved.
            </div>
        </footer>
    </body>
</html>