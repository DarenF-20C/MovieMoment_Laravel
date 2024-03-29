@extends('layout')
<title>M&M | Help Center</title>
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/userGuide.css')}}">
@endpush
<body> <br><br>
<div class="container">
  <div class="slide-right">
    <h2 class="h2">Help Center</h2>
  </div>
  <!-- Item 1 : Movie Moment -->

  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseOne"
          aria-expanded="false"
          aria-controls="flush-collapseOne"
        >
        Movie Moment (M&M) &nbsp;  <img class="image" src="images/logo.png" alt="logo">
        </button>
      </h2>
      <div
        id="flush-collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-mdb-parent="#accordionFlushExample"
      >
      <div class="accordion-body">
      <i class="fas fa-arrow-right"></i> <strong>Movie Moment (M&M)</strong> is a web-based movie recommendation system that done by diploma students in Southern University College.
      The project team members are Loh Chia Heung, Fang Xiang Lun and Teh Jun Yuan. <br> 
      <i class="fas fa-arrow-right"></i> The main goal of this system is to provide an <strong>online platform for movie lovers to share their views and opinions about movies.</strong>
      Users are able to publish any contentes they liked , comments others' posts, like and share contents posted by others. <br>
      <i class="fas fa-arrow-right"></i> Besides, our Movie Moment also provides <strong>latest movie and TV shows information that shown in the past, current and in the future</strong> as usual movie recommendation system. <br>
      <i class="fas fa-arrow-right"></i> In addition, our system can also make our users <strong>saving time on searching movie to watch in the searching platform</strong> such as google, firefox, microsoft edge and so on. It is because our Movie Moment allows users are able to <strong>choose their favorite types of movies </strong> to look for such as horror, romance, science fiction and so on. <br>
      <i class="fas fa-arrow-right"></i> Our system also provides <strong>top 10 lists</strong> for movies and TV shows based on the rating provided by the users and it will be <strong>updated every day </strong>once the rating is changed.<br>
      <i class="fas fa-arrow-right"></i> Last but not least, we hoped that our system can provide a better and comfortable UI and UX experiences for our users.
      Our project team will try our best to improve and make our system better and more advanced in the future.
        </div>
      </div>
    </div>
    <!-- Item 2 : Movie Recommendation System -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseTwo"
          aria-expanded="false"
          aria-controls="flush-collapseTwo"
        >
          Movie Recommendation System &nbsp; <i class="fas fa-video"></i> 
        </button>
      </h2>
      <div
        id="flush-collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i> In our movie recommendation page, our system provided three selections which are <strong>(1) Popular Movies</strong>,<strong> (2) Family movies </strong>and <strong>(3) TV Shows.</strong> <br>
        <strong> (1) Popular Movies</strong> are the movies that released in recent years and it is suitable for users of all ages. <br> 
        <strong> (2) Family Movies</strong> are the movies that are more suitable for family to watch.Most of the movies are funny, fascinating, and lovely such as anime and cartoon. <br>
        <strong> (3) TV Shows</strong> are the drama series or tv shows that contains more than one episode. For example, cooking shows, Korean drama, variety show and so on. <br><br>
        <i class="fas fa-arrow-right"></i> <strong> Movie Details/Information provided for Movies: </strong>  <br>
        <i class="far fa-check-square"></i> </strong>Title, Genre, Rating / Total Vote Count , Adult, Language, Status, Tagline, Overview, Released Date, Name and Images of Actor/Actress, Trailer Videos, and Similar Movies. <br>
        <i class="fas fa-arrow-right"></i> <strong> Movie Details/Information provided for TV Shows: </strong> <br>
        <strong><i class="far fa-check-square"></i> </strong>Title, Genre, Rating / Total Vote Count , Adult, Number of Episodes, Number of Seasons, Language, Status, Tagline, Overview, Released Date || Last Updated Date, Name and Images of Actor/Actress, Trailer Videos, and Similar TV Shows. <br>
        <i class="fas fa-arrow-right"></i> <strong> Genres provided for movies:</strong><br>
        <strong><i class="far fa-check-square"></i> </strong> Action, Adventure, Animation, Comedy, Crime, Documentary, Drama, Family, Fantasy, History, Horror, Music, Mystery, Romance,
        Science Fiction, TV Movies, Thriller, Way, Western <br>
        <i class="fas fa-arrow-right"></i> <strong> Genres provided for TV shows:</strong><br>
        <strong><i class="far fa-check-square"></i> </strong> Action & Adventure, Animation, Comedy, Crime, Documentary, Drama, Family, Kids, History, Reality, Mystery, Romance, News, Sci-Fi & Fantasy, Soap, Talk, War & Politics, Western <br><br>
        <strong><i class="fas fa-arrow-right"></i>  Just choose the button based on your favourite types of movies to find for your movies! </strong><br>
        <strong><i class="fas fa-arrow-right"></i>  Similar movies recommendation </strong> are provided for users based on the genres of the movies that you choose! 
        <br><br>
        P.S. "A good movie makes the audience feel like they've journey with the characters." by Rich Moore. <br>
        <i class="fas fa-plus"></i> Additional Info: More details for movies and TV shows will be added in the future!
        </div>
      </div>
    </div>
  <!-- Item 9 : Movie Community -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingNine">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseNine"
          aria-expanded="false"
          aria-controls="flush-collapseNine"
        >
        Movie Community &nbsp; <i class="fas fa-comments"></i>
        </button>
      </h2>
      <div
        id="flush-collapseNine"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingNine"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i>  It is a <strong>platform or medium that provided for movie lovers</strong> to discuss or share their views about movie.<br>
        <i class="fas fa-arrow-right"></i> In this page, you can <strong>share anything you want included images, audio and videos.</strong><br>
        <i class="fas fa-arrow-right"></i> Don't be shy to share your opinion!<br><br>

        <strong>"The Miracle is this: The more we share the more we have" <br>
        - Leonard Nimay</strong>
        </div>
      </div>
    </div>
  <!-- Item 3 Top 10 Lists-->
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseThree"
          aria-expanded="false"
          aria-controls="flush-collapseThree"
        >
          Top 10 Lists &nbsp; <i class="fas fa-crown"></i>
        </button>
      </h2>
      <div
        id="flush-collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingThree"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i> In our top 10 page, our system provided two selections which are <strong>(1) Movies</strong> and <strong>(2) TV Shows.</strong> <br>
        <i class="fas fa-arrow-right"></i> These top 10 lists are <strong>ranked based on the rating of movies and TV Shows</strong> given by the users. We could said that it is updated daily because 
        once the rating is changed, then the ranking for the lists will also be changed.<br>
        <i class="fas fa-arrow-right"></i> This function allows users to <strong>get idea on the best or popular movies and TV Shows that watched by most of the people</strong> around the world at that moment. <br>
        <br>
        P.S. This can make you <strong>follow the movies and TV shows trends!</strong> 
        </div>
      </div>
    </div>
  <!-- Item 4 Contact Us -->
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFour">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseFour"
          aria-expanded="false"
          aria-controls="flush-collapseFour"
        >
          Contact Us   &nbsp; <i class="fas fa-phone"></i>
        </button>
      </h2>
      <div
        id="flush-collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFour"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i> Our system has provided feedback form for users to write and sent to us.  <br>
        <i class="fas fa-arrow-right"></i> If you are facing any problems on using our system or want to share your opinions or feedback to us for improving our system, don't hesitate to do it! 
        We are willing to serve and reply you as soon as possible. <br><br>
          P.S. <strong>"Feedback is the breakfast of champions."</strong> by Ken Blanchard
        </div>
      </div>
    </div>
    <!-- Item 5 Rewards -->
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingSix">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseSix"
          aria-expanded="false"
          aria-controls="flush-collapseSix"
        >
        Rewards  &nbsp; <i class="fas fa-award"></i>
        </button>
      </h2>
      <div
        id="flush-collapseSix"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingSix"
        data-mdb-parent="#accordionFlushExample"
      >
      <div class="accordion-body">
      <strong><i class="fas fa-arrow-right"></i> Valuable Rewards</strong> are provided for users to redeem! There are some special discounts for movies tickets, vouchers for couple seat , free drinks and snacks vouchers and so on.
      <br><strong>(1) Question: Where to view the rewards?</strong> <br>
      <i class="fas fa-arrow-right"></i> Go to the "Rewards Redeem" page to check for the rewards.
      <br><strong>(2) Question: No rewards available for redeem?</strong> <br>
      <i class="fas fa-arrow-right"></i> Please wait our admins to add it. Please contact our admins if you are in urgency.
      <br><strong>(3) Question: Can't redeem rewards?</strong> <br>
      <i class="fas fa-arrow-right"></i> Your points is not enough. Please earn more points to redeem reward.
      <br><strong>(4) Question: Where can I view the rewards that I have redeemded?</strong> <br>
      <i class="fas fa-arrow-right"></i> Go to the "My Rewards" page to check for the rewards.
      <br><strong>(5) Question: How can I use the rewards?</strong> <br>
      <i class="fas fa-arrow-right"></i> Go to the "My Rewards" page, click the voucher code of the rewards that you want to redeem. Paste the voucher code in the redemption website.
      （No need to copy the voucher code, when you click it, it will automatically be copied)
      <br><strong>(6) Question: What is the valid date time for the voucher redeemed?</strong> <br>
      <i class="fas fa-arrow-right"></i> 1 month.
      </div>
      </div>
    </div>
  <!-- Item 6 How to earn points? -->
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFive">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseFive"
          aria-expanded="false"
          aria-controls="flush-collapseFive"
        >
        How to earn points  &nbsp; <i class="fas fa-marker"></i>
        </button>
      </h2>
      <div
        id="flush-collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFive"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i> If you want to redeem the valuable rewards provided by our admins, <strong>Points </strong> are necessary! <br>
        <i class="fas fa-arrow-right"></i><strong>Ways to earn points: </strong>  <br>
          (1)<strong>Publish contents </strong> in Movie Community page. <br>
          (2)<strong>Like contents </strong> in Movie Community page. <br>
          (3)<strong>Share contents </strong> in Movie Community page. <br>
          (4)<strong>Comments contents </strong> in Movie Community page. <br>
          <strong><i class="fas fa-bell"></i></i> Each ways can earn 10 points.</strong><br>
          <i class="fas fa-arrow-right"></i> Limited points received daily: <strong>150 points</strong> <br>
          <i class="fas fa-arrow-right"></i> After the limited points achived, user can still publish contents, like contens, and share contents, but no points will be given.
          <br><br>
          P.S “Many a little makes a mickle”. Be patient and industrious to earn the points. ^_^
      </div>
      </div>
    </div>
  <!-- Item 7 Movie Database -->
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingSeven">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseSeven"
          aria-expanded="false"
          aria-controls="flush-collapseSeven"
        >
        Movie Database &nbsp; <i class="fas fa-database"></i>
        </button>
      </h2>
      <div
        id="flush-collapseSeven"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingSeven"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
        <i class="fas fa-arrow-right"></i>All of our movie data is fetched from <Strong>TMDb API.</strong> <br>
        <i class="fas fa-external-link-alt"></i> Link: <a href="https://developers.themoviedb.org/3/getting-started/introduction">TMDb API</a> <br>
          <i class="fas fa-arrow-right"></i>We would like to say a big thanks to TMDb for allowing us to use its powerful API. 
          Its provide a large amount of movie data and information for us. <br>
          <i class="fas fa-arrow-right"></i> Until now (12 August 2022), TMDb has owned
          <strong>729,701 movies</strong>,<strong> 135,186 TV Shows</strong>,<strong> 215,443 TV Season</strong> and
          <strong> 3,322,819 TV Episodes. </strong>    
        </div>
      </div>
    </div>
  <!-- Item 8 General Questions -->
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingEight">
        <button
          class="accordion-button collapsed"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#flush-collapseEight"
          aria-expanded="false"
          aria-controls="flush-collapseEight"
          id="buttoneight"
        >
        General Questions // Problems &nbsp; <i class="far fa-question-circle"></i>
        </button>
      </h2>
      <div
        id="flush-collapseEight"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingEight"
        data-mdb-parent="#accordionFlushExample"
      >
        <div class="accordion-body" id="last"> 
        <h3>Movie Recommendation Page</h3>
        <strong> Question 1: Click "Know-More" button to view movie details but nothing has been shown?</strong> <br>
        <strong> <i class="fas fa-arrow-right"></i></strong> Details of the movies are not completed or some bug has occured. Please contact our admins as soon as possible. Sorry for inconvenience. <br>
        <strong> Question 2: How to search movies?</strong> <br>
        <strong> <i class="fas fa-arrow-right"></i></strong> Input the name of the movies that you want to view in the search bar which the message "Search for your movie" is placed.<br>
        <br>
        <h3>Top 10 Lists</h3>
        <strong> Question 1: Click the movie poster to view movie details but nothing has been shown?</strong> <br>
        <strong> <i class="fas fa-arrow-right"></i></strong> Details of the movies are not completed or some bug has occured. Please contact our admins as soon as possible. Sorry for inconvenience.
        <br><br>
        <h3>Rewards</h3>
        -None.
        <br><br>
        <h3>Movie Community</h3>
        -None.
        <br><br>
        P.S. Most of the questions that asked by users will be updated in future.
        </div>
      </div>
    </div>
  </div>
</div>
<br>
</body>
@endsection
