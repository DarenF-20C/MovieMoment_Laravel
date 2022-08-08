@extends('layout')
@section('content')
<body>
<br><br>
    <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data" >
    @CSRF
  <div class="container">
    <div class="main-body">
    
        <br><br>
          <h2>My Profile</h2>

          @foreach($users as $user)
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('images/user/'.$user->userAvatar)}}" alt="userAvatar" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <p class="text" style="float: left;">Edit Profile Image</p>
                      <input type="file" class="form-control" id="userAvatar" name="userAvatar" required><br/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="{{ route('userProfile',['id'=>$user->id])}}" style="color:black;">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></path></svg> Profile</h6>
                    <span class="text-secondary"></span>
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="{{ route('editPassword',['id'=>$user->id])}}" style="color:black;">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>  Password</h6>
                    <span class="text-secondary"></span>
                  </a>
                  </li>
                  </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="name" name="name" required size="65" value="{{$user->name}}"><br />
                    <input type="hidden" name="userID" id="userID" value="{{$user->id}}">  
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="email" name="email" required size="65"  value="{{$user->email}}"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="tel" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{7}" required  value="{{$user->phone}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-md-6" >
                      <select name="gender" id="gender" value="{{$user->gender}}">
                        <option option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="date" id="date" name="date" required size="65" value="{{$user->date}}"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-primary" type="submit">Save Profile</button>
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
</body>
@endsection 
