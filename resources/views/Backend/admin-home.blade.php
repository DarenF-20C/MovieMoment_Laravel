@extends('layouts.admin')
@section('content')
@push('js')
<script src="{{asset('js/dataTable.js')}}" defer></script>
@endpush
<div class="container-fluid">

<div class="container-fluid">

	  <!-- Breadcrumbs-->
		<ol class="breadcrumb" style="background-color: #FFF8DC;">
    <li class="breadcrumb-item">
      <a href="{{route('admin.home')}}">Dashboard</a>
    </li>
  </ol>
	<div class="col-div-3">
	<a href="{{route('admin.adminList')}}">
		<div class="box">
			<p>{{$totalAdmin}}<br/><span>Total Admin</span></p> </a>
			<i class="fa fa-users box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
	<a href="{{route('admin.userList')}}">
		<div class="box">
			<p>{{$totalUser}}<br/><span>Total User</span></p> </a>
			<i class="fa fa-user box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
	<a href="{{route('admin.postList')}}">
		<div class="box">
			<p>{{$totalPost}}<br/><span>Total Post</span></p> </a>
			<i class="fa fa fa-pencil-square-o box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		<a href="{{route('admin.commentList')}}">
			<p>{{$totalComment}}<br/><span>Total comment</span></p> </a>
			<i class="fa fa-comments box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		<a href="{{route('admin.rewardList')}}"> 
			<p>{{$totalRewards}}<br/><span>Total Rewards</span></p> </a>
			<i class="bx bx-award box-icon fa-lg"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/></br>
</div>
</div>
</div>

</div>
</div>
  </div>
		</div>
	</div>
	</div>

		
	<div class="clearfix"></div>
</div>
@endsection
