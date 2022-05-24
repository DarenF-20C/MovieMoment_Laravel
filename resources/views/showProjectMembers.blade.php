@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/projectMembers.css')}}">
@endpush
<body><br>
<main>
<div class="container-fluid">
<section id="teammembers" class="text-center text-black">
<br>
<h2 class="my-2"style="font-size:80px;">Project Members</h2> <br>
<div class="row">
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="https://img.tukuppt.com/png_preview/00/46/97/jPISSbfuj7.jpg!/fw/780">
        <h5 class="card-title"> Project Member 1 </h5>
        <p class="card-text">     
        Name: Loh Chia Heung <br>
        Student ID: D200262C <br>
        Batch: IT-20C <br>
        H/P: 012-34567891 <br>
        Hotmail:lohchiaheung@gmail.com<br>
        Location:Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
</div>
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="https://img.tukuppt.com/png_preview/00/46/97/LwhsdW43FZ.jpg!/fw/780">
        <h5 class="card-title"> Project Member 2 </h5>
        <p class="card-text">     
        Name: Teh Jun Yuan <br>
        Student ID: D200248C <br>
        Batch: IT-20C <br>
        H/P: 012-34567891 <br>
        Hotmail:Junyuan741@gmail.com<br>
        Location:Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
</div>
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <img class="chathead" src="https://bpic.51yuansu.com/pic3/cover/03/47/84/5badd4424da07_610.jpg">
        <h5 class="card-title"> Project Member 3 </h5>
        <p class="card-text"> 
        Name: Fang Xiang Lun <br>
        Student ID: D200221C <br>
        Batch: IT-20C <br>
        H/P: 012-34567891 <br>
        Hotmail:D200221C@sc.edu.my<br>
        Location:Johor Bahru, Johor
       </p>
    </div>
  </div> 
</p>
<br>
</div>
</div>
</main>
@endsection

