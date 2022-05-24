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
      <img class="chathead" src="https://bpic.588ku.com/element_origin_min_pic/19/04/09/7c15cf7125b5fb7b8a163e594dc9ac25.jpg">
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
      <img class="chathead" src="https://bpic.588ku.com/element_origin_min_pic/19/04/09/7c15cf7125b5fb7b8a163e594dc9ac25.jpg">
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
      <img class="chathead" src="https://bpic.588ku.com/element_origin_min_pic/19/04/09/7c15cf7125b5fb7b8a163e594dc9ac25.jpg">
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

