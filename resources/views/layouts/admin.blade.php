<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Own Css-->
     <link href="{{asset('css/style.css')}}" rel='stylesheet'>

     <!--DataTable link-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  @stack('js')
   </head>
<body>
  @csrf
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">M&M System</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{route('admin.home')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{route('admin.adminList')}}">
         <i class='bx bx-user-pin'></i>
         <span class="links_name">Admin</span>
       </a>
       <span class="tooltip">Admin</span>
     </li>
      <li>
       <a href="{{route('admin.userList')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="{{route('admin.commentList')}}">
         <i class='bx bx-comment-detail' ></i>
         <span class="links_name">Comment</span>
       </a>
       <span class="tooltip">Comment</span>
     </li>
     <li>
       <a href="{{route('admin.postList')}}">
         <i class='bx bx-edit' ></i>
         <span class="links_name">Post</span>
       </a>
       <span class="tooltip">Post</span>
     </li>
     <li>
     <li>
       <a href="{{route('admin.rewardList')}}">
       <i class="bx bx-award"></i>
         <span class="links_name">Reward</span>
       </a>
       <span class="tooltip">Reward</span>
     </li>
     <li class="profile">
         <div class="profile-details">
          <img src="/images/user/{{Auth::user()->userAvatar}}">
           <div class="name_job">
             <div class="name">{{Auth::user()->name}}</div>
           </div>
         </div>
         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{__('Sign out')}}
         <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>
  </div>
  <section class="home-section">
    <div class="text">M&M Admin System Dashboard  <img src="/images/logo.png" height="50px" alt="M&M Logo"/></div>
    @yield('content')
  </section>

  <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>
