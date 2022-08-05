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
    <li class="breadcrumb-item active">Comment-Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Comment List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>Content Detail</th>
              <th>Comment Detail</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          @if(count($comments))
              @foreach($comments as $comment)
              <tr>
              <td>{{$comment->id}}</td>
                <td>{{$comment->userName}}</td>
                <td>{{$comment->ctDetail}}</td>
                <td>{{$comment->cmDetail}}</td>
                <td>{{$comment->created_at}}</td>
                <td>
                  <a class="admin-btn" href="{{route('admin.deleteComment',['id'=>$comment->id])}}" onClick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i> Delete</a>
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

@endsection
