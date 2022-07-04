@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/movieDetails.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/movieDetail.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
@endpush
<body><br><br>
<div class="movie-details">
<div class="row">
<div class="container">
<div class="container">
<div class="row">
    <div class="col-6">
    <img src="images/movies/captain-marvel.png" class="Poster" alt="movieDetail.img">
    </div>
    <div class="col-6">
    <h1 class="movieTitle">Wonder Woman </h1>
    <div class="contents">
    <p class="Title">Classification</p><p class="content">P13</p> 
    <p class="Title">Rating:</p><p class="content">9.0</p>
    <p class="Title">Language:<p class="content">English</p>
    <p class="Title">Genre:</p><p class="content">Action / Adventure / Fantasy</p>
    <p class="Title">Director: </p><p class="content">Anna Boden, Ryan Fleck</p>
    <div class="overflow">
    <p class="Title">Tagline:  </p><p class="content">"So long as life remains, there is always hope... and so long as there is hope, there can be victory!" </p>
    <p class="Title">Overview:</p><p class="content">Set in the 1990s when Earth becomes caught in the middle of an intergalactic 
    battle between two alien races. Carol Danvers, while trying to uncover the past that she can`t recall, 
    discovers that she possesses superpowers which she can use not only to stop the war but also help other 
    planets in the universe.</p>
    <p class="Title">Watch Trailer:</p>
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/moY78qMJuxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
    </div>
    </div><br>
    <h1 class="actorTitle">Actor / Actress:</h1>
    <div class="card-group">
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Gal_Gadot_cropped_lighting_corrected.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h3 class="card-title">Gal Gadot</h5>
      <h5 class="card-content">Act as WonderWoman</h5>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Gal_Gadot_cropped_lighting_corrected.jpg" class="card-img-top" alt="Palm Springs Road"/>
    <div class="card-body">
    <h3 class="card-title">Gal Gadot</h5>
      <h5 class="card-content">Act as WonderWoman</h5>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Gal_Gadot_cropped_lighting_corrected.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
    <div class="card-body">
    <h3 class="card-title">Gal Gadot</h5>
      <h5 class="card-content">Act as WonderWoman</h5>
      </p>
    </div>
  </div>
</div>
    </div>
    </div>
    <h1 class="actorTitle">Similar Movies:</h1>
    <div class="card-group">
  <div class="card">
    <img src="https://www.sjsreview.com/wp-content/uploads/2018/12/aquaman-720x900.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h3 class="card-title">Aquaman</h5>>
    </div>
  </div>
  <div class="card">
    <img src="https://www.sjsreview.com/wp-content/uploads/2018/12/aquaman-720x900.jpg" class="card-img-top" alt="Palm Springs Road"/>
    <div class="card-body">
    <h3 class="card-title">Aquaman</h5>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="https://www.sjsreview.com/wp-content/uploads/2018/12/aquaman-720x900.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
    <div class="card-body">
    <h3 class="card-title">Aquaman</h5>
      </p>
    </div>
  </div>
</div>
    <br>

</body>
