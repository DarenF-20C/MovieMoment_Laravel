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

        @stack('css')
  </head>
  <!--/Head-->
    <body>
      <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
      @stack('script')

        <!-- @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success')  }}
        </div>
        @endif -->
    
        <header>
        <!-- Navbar -->
        <!-- M&M Logo-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <a class="navbar-brand" href="{{url('home')}}">
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
                           <a class="nav-link {{Route::currentRouteNamed('movieRecommendation') ? 'active' : '' }} {{Route::currentRouteNamed('familyMovie') ? 'active' : '' }} {{Route::currentRouteNamed('tvshow') ? 'active' : '' }} dropdown-toggle" href="{{url('movieRecommendation')}}" ></i> <i class="fas fa-video"></i> Movie Recommendation</a>
                              <ul class="dropdown-menu recommend">
                              <li><a class="dropdown-item {{Route::currentRouteNamed('movieRecommendation') ? 'active' : '' }}" href="{{url('movieRecommendation')}}">Popular Movies</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('familyMovie') ? 'active' : '' }}" href="{{url('familyMovie')}}">Family Movies</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('tvshow') ? 'active' : '' }}" href="{{url('tvshow')}}">TV Shows</a></li>
                               </ul>
                           </li>
                           
                           <li class="nav-item">
                           <a class="nav-link {{Route::currentRouteNamed('top10') ? 'active' : '' }} {{Route::currentRouteNamed('top10TV') ? 'active' : '' }}  dropdown-toggle " href="{{url('top10')}}"><i class="fas fa-crown"></i> Top 10 Movie (Daily)  </a>         
                           <ul class="dropdown-menu top10list">
                              <li><a class="dropdown-item {{Route::currentRouteNamed('top10') ? 'active' : '' }}" href="{{url('top10')}}">Movie Lists</a></li>
                              <li><a class="dropdown-item {{Route::currentRouteNamed('top10TV') ? 'active' : '' }}" href="{{url('top10TV')}}">TV Shows</a></li>
                               </ul>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link {{Route::currentRouteNamed('showMyReward') ? 'active' : '' }} {{Route::currentRouteNamed('showRewards') ? 'active' : '' }} {{Route::currentRouteNamed('searchRewards') ? 'active' : '' }} {{Route::currentRouteNamed('redeemRewards') ? 'active' : '' }}" href="{{url('showRewards')}}"class="text-dark"><i class="fas fa-award"></i> Reward </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link dropdown-toggle {{Route::currentRouteNamed('showProjectMembers') ? 'active' : '' }} {{Route::currentRouteNamed('userGuide') ? 'active' : '' }} {{Route::currentRouteNamed('contactUs') ? 'active' : '' }}"></i>Others</a>
                                 <ul class="dropdown-menu other">
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('showProjectMembers') ? 'active' : '' }} " href="{{url('showProjectMembers')}}">Our Teams</a></li>
                                 <li><a class="dropdown-item {{Route::currentRouteNamed('userGuide') ? 'active' : '' }}" href="{{url('userGuide')}}">Help</a></li>
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
            @guest
            <a href="{{url('login')}}" class="nav-link text-inverse-lighter" style="text-decoration:none;color:white;"><i class="fas fa-sign-in-alt">Login</i></a>
            @else
               <!-- Login Avatar -->
               <a class="nav-link dropdown-toggle hidden-arrow avatar" href="#" >
                <i class="fas fa-user"></i>
               </a>
               <ul class="dropdown-menu navbar-nav right-nav">
                <li>
                    <a class="dropdown-item profilemenu {{Route::currentRouteNamed('userProfile') ? 'active' : '' }} " href="{{ route('userProfile') }}">My profile</a>
                </li>
                  <li><a class="dropdown-item {{Route::currentRouteNamed('myReward') ? 'active' : '' }} {{Route::currentRouteNamed('showMyReward') ? 'active' : '' }}" href="{{url('myReward')}}">My Rewards</a></li>
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
            @endguest
               
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
