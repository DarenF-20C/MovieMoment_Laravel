@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/editProfile.css')}}">
@endpush
<body>
    <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data" >
    @CSRF
  <div class="container">
    <div class="main-body">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('home')}}" class="main">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('userProfile') }}" class="main">My Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit My Profile</li>
        </ol>
        </nav>   
          @foreach($users as $user)
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('images/user/'.$user->userAvatar)}}" alt="userAvatar" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="name">{{$user->name}}</h4>
                      <p class="changePic" style="float: left;">Change your profile picture:</p>
                      <input type="file" class="form-control" id="userAvatar" name="userAvatar"><br/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="name" name="name" required size="65" value="{{$user->name}}"><br />
                    <input type="hidden" name="userID" id="userID" value="{{$user->id}}">  
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="email" name="email" required size="65"  value="{{$user->email}}"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="tel" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{7}" required  value="{{$user->phone}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender:</h6>
                    </div>
                    <div class="col-md-6" >
                      <select name="gender" id="gender" value="{{$user->gender}}">
                      @if ($user->gender == "F")
                      <option value="{{$user->gender}}" selected>Female</option>
                      <option value="M">Male</option>
                      @endif
                      if ($user->gender)
                      @if ($user->gender == "M")
                      <option value="{{$user->gender}}" selected>Male</option>
                      <option value="F">Female</option>
                      if ($user->gender)
                      @endif
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="date" id="date" name="date" required size="65" value="{{$user->date}}"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info" type="submit">Save Profile</button>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
            </div>
          </div>

        </div>
    </div>
<hr>
<br>
</body>
@endsection 
