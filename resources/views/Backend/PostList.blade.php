@extends('layouts.admin')
@section('content')
@push('js')
<script src="{{asset('js/dataTable.js')}}" defer></script>
@endpush

    <!-- Content -->
    <div class="container-fluid">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb" style="background-color: #FFF8DC;">
    <li class="breadcrumb-item">
      <a href="{{route('admin.home')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Post-Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Post List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="99%" cellspacing="0" style="border-color:black;">
          <thead style="background-color:Aqua;color: ;border-color:black;">
            <tr style="border-color:black;">
              <th style="border-right-color:black;" width="50px">ID</th>
              <th style="border-right-color:black;">User Name</th>
              <th style="border-right-color:black;" width="800px">Content Detail</th>
              <th style="border-right-color:black;">Created Time</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          @if(count($posts))
              @foreach($posts as $post)
              <tr style="background-color:#ccffff;">
              <td  style="border-right-color:black;  border-bottom-color:black;">{{$post->id}}</td>
                <td  style="border-right-color:black;  border-bottom-color:black;">{{$post->userName}}</td>
                <td  style="border-right-color:black;  border-bottom-color:black;">{{$post->ctDetail}}</td>
                <td  style="border-right-color:black;  border-bottom-color:black;">Date: {{$post->ctDate}}  <br> Time: {{$post->ctTime}}</td>
                <td  style="border-bottom-color:black;">
                  <a class="btn btn-danger btn-sm" href="{{route('admin.deletePost',['id'=>$post->id])}}" onClick="return confirm('Are you sure to delete?')" onClick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i> Delete</a>
              </td>
              </tr>
              @endforeach
              @else
            <tr>
              <th>--</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
            </tr>
        @endif
  
          </tbody>
        </table>
      </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<style>
table.dataTable thead .sorting {
  background-image: url("/images/unfold_19.png")
}

table.dataTable thead .sorting_desc {
    background-image: url("/images/downOnly.png")
}

table.dataTable thead .sorting_asc {
    background-image: url("/images/upOnly.png")
}

.btn-danger {
  border-radius:10%;
  background-color:#FA5255;
  min-width:80px;
  color:black;
  margin: 0 -5PX 5PX 5PX;
}

.btn-danger:hover {
  background-color:black;
  color:#FA5255;
}
</style>
@endsection
