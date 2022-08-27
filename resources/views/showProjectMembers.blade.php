@extends('layout')
<title>M&M | Our Team</title>
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/projectMembers.css')}}">
@endpush
<body><br>
<main>
<div class="container-fluid">
<section id="teammembers" class="text-center text-black">
<br>
<h2 class="slide-right h2">Our Team Members</h2> <br>
<div class="row wholecard">
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="https://img.tukuppt.com/png_preview/00/46/97/jPISSbfuj7.jpg!/fw/780">
        <h5 class="card-title"> Loh Chia Heung </h5>
        <p class="card-text">     
        <strong>Student ID:</strong> D200262C <br>
        <strong>Batch:</strong> IT-20C <br>
        <strong>H/P:</strong> 018-467 9188 <br>
        <strong>Email:</strong>lohchiaheung@gmail.com<br>
        <strong>Location:</strong>Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
</div>
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="https://img.tukuppt.com/png_preview/00/46/97/LwhsdW43FZ.jpg!/fw/780">
        <h5 class="card-title"> Teh Jun Yuan </h5>
        <p class="card-text">     
        <strong>Student ID:</strong> D200248C <br>
        <strong>Batch:</strong> IT-20C <br>
        <strong>H/P:</strong> 018-381 7870 <br>
        <strong>Email:</strong>Junyuan741@gmail.com<br>
        <strong>Location:</strong>Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
</div>
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="/images/ghost.jpg">
        <h5 class="card-title"> Fang Xiang Lun </h5>
        <p class="card-text"> 
        <strong>Student ID:</strong> D200221C <br>
        <strong>Batch:</strong> IT-20C <br>
        <strong>H/P:</strong> 016-761 1952 <br>
        <strong>Email:</strong>fangxianglun@gmail.com<br>
        <strong>Location:</strong>Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
<br>
</div>
</div>
</main>
@endsection

