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
			<p>{{$totalAdmin}}<br/><span>Total Admin</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
	<a href="{{route('admin.userList')}}">
		<div class="box">
			<p>{{$totalUser}}<br/><span>Total User</span></p>
			<i class="fa fa-user box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>{{$totalPost}}<br/><span>Total Post</span></p>
			<i class="fa fa fa-pencil-square-o box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>{{$totalComment}}<br/><span>Total comment</span></p>
			<i class="fa fa-comments box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/></br>
</div>
</div>
	<div class="container-fluid">

<div class="container-fluid">

  


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Admins List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>admin</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
        
  
          </tbody>
        </table>
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