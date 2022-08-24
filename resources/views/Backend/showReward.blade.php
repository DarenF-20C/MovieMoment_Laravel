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
    <li class="breadcrumb-item active">Reward-Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header" >
      <i class="bx bx-table"></i> Rewards Lists
      <a class="addReward" href="{{ route('admin.addReward') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Reward</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="99%" cellspacing="0" style="border-color:black;">
          <thead style="background-color:Aqua;color: ;border-color:black;">
            <tr style="border-color:black;">
            <th scope="col" class="hidden" style="border-right-color:black;" >Id</th>
                        <th scope="col" style="border-right-color:black;">Reward Name</th>
                        <th scope="col" style="border-right-color:black;">Images</th>
                        <th scope="col" style="border-right-color:black;">Points</th>
                        <th scope="col" class="text-center" style="border-right-color:black;">Quantity</th>
                        <th scope="col" style="border-right-color:black;">Redeem Code</th>
                        <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
        
          @if(count($rewards))
                        @foreach($rewards as $reward)
              <tr style="background-color:#ccffff;">
              <td class="hidden" style="border-right-color:black;  border-bottom-color:black;">{{$reward->id}}</td>
                            <th scope="row" style="border-right-color:black;  border-bottom-color:black;">{{$reward->name}}</th>
                            <td style="border-right-color:black; border-bottom-color:black;" ><img src="/images/rewardImage/{{$reward->image}}" width="180" height="200"></td>
                            <td style="border-right-color:black;  border-bottom-color:black;">{{$reward->points}}</td>
                            <td class="text-center" style="border-right-color:black;  border-bottom-color:black;">{{$reward->quantity}}</td>
                            <td style="border-right-color:black;  border-bottom-color:black;"><strong>{{$reward->code}}</strong></td>
                            <td  style="border-bottom-color:black;">
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
.addReward {
    float: right;
}

.btn-success {
    background-color:#00dd00;
    color:black;
    border-radius:10%;
    min-width:80px;
    margin: 0-5PX 5PX 5PX;
}

.btn-success:hover {
    background-color:black;
    color:#00dd00;
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

table.dataTable thead .sorting {
  background-image: url("/images/unfold_19.png")
}

table.dataTable thead .sorting_desc {
    background-image: url("/images/downOnly.png")
}

table.dataTable thead .sorting_asc {
    background-image: url("/images/upOnly.png")
}

</style>
@endsection

    

