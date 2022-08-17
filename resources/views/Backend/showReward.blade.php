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
    <li class="breadcrumb-item active">Reward Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Rewards Lists
      <a class="addReward" href="{{ route('admin.addReward') }}">Add Reward</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th scope="col" class="hidden">Id</th>
                        <th scope="col">Reward Name</th>
                        <th scope="col">Images</th>
                        <th scope="col">Points</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col">Redeem Code</th>
                        <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @if(count($rewards))
                        @foreach($rewards as $reward)
              <tr>
              <td class="hidden">{{$reward->id}}</td>
                            <th scope="row">{{$reward->name}}</th>
                            <td><img src="/images/rewardImage/{{$reward->image}}" width="180" height="200"></td>
                            <td>{{$reward->points}}</td>
                            <td class="text-center">{{$reward->quantity}}</td>
                            <td><strong>{{$reward->code}}</strong></td>
                            <td>
                            <a class="btn btn-success btn-sm" href="{{route('admin.editReward',['id' => $reward -> id])}}">Edit <i class="fa fa-edit"></i></a> <br>
                            <a class="btn btn-danger btn-sm" href="{{route('admin.deleteReward',['id' => $reward -> id])}}" onClick="return confirm('Are you sure to delete?')">Delete <i class="fa fa-trash"></i></a>
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
<style>
/* .titleReward {
    font-size:55px;
}

.btn.btn-secondary {
   background-color:blue;
}

.btn.btn-secondary:hover {
   background-color:black;

} */
.addReward {
    float: right;
}

.btn-success {
    margin:5px;
}
</style>
@endsection

    

