@extends('layout')
@section('content')
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

<body>
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
</html>

@endsection