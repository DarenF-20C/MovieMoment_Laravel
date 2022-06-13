@extends('layout')
@section('content')
@push('css')
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
@endpush
<body>

    <main>
      <div class="container-fluid">
      <section id="about" class="text-center text-black">
        <br>
        <h2 class="my-2"style="font-size:80px;">About Us</h2>
          <hr class="orangeline">
        <br>
        <div class="row container-in">
           <div class=col-md-1></div>
           <div class=col-md-10>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center justify-content-center align-items center "> 
                  <h2>Project Teams</h2>
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus massa vitae lacus sollicitudin rhoncus. Pellentesque condimentum lacus dignissim porttitor consequat. Maecenas imperdiet, libero quis elementum porttitor, felis magna dapibus urna, 
                  </p>
                  </div>
                  <div class="col-md-6"><img src="https://www.softelnetworks.com/images/brand/our_team.jpg" alt="projectTeam" class="img-fluid rounded-pill hover-shadow"></div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6"><img src="https://storage.googleapis.com/profit-prod/wp-content/uploads/2021/02/73cb03cc-management-by-objective.jpg" alt="objectivesGoal" class="img-fluid rounded-pill hover-shadow"></div>
               
               <div class="col-md-6 text-center"> <br><br>
                  <h2>Objectives/Goals</h2>
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus massa vitae lacus sollicitudin rhoncus. Pellentesque condimentum lacus dignissim porttitor consequat. Maecenas imperdiet, libero quis elementum porttitor, felis magna dapibus urna, 
                  </p> 
                  </div>
            </div>
            <br>
            <div class="row justify-content-center align-items center">
               <div class="col-md-6 text-center"> <br><br>
                  <h2>Project Ideas</h2>
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus massa vitae lacus sollicitudin rhoncus. Pellentesque condimentum lacus dignissim porttitor consequat. Maecenas imperdiet, libero quis elementum porttitor, felis magna dapibus urna, 
                  </p>
                  </div>
                  <div class="col-md-6"><img src="images/projectIdea.png" style="height: 350px;"></div> 
               </div><br>
            </div>
            <div class=col-md-1></div>
           </div>
         </div>
    </main>
    <!-- MDB Java scripts-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
@endsection