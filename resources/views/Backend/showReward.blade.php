@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dear {{ Auth::user()->name }},</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h2 class="titleReward">Reward List</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline my-2 my-lg-0" action="{{route('admin.search')}}" method="POST">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search by name/code" aria-label="Search" name="keyword" style="height:50px;">
                <button class="btn btn-primary btn-sm" type="submit"> Search </button> &nbsp;
                <button class="btn btn-primary btn-sm" type="submit" action="{{route('admin.rewardList')}}">Back</button>
            </form>
        </div>
        <div class="col-md-12 offset-md-10">  
               <a class="admin-btn" href="{{ route('admin.addReward') }}">Add Reward</a>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">         
        <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%">
                <thead class="thead-dark">
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
                            <a class="btn btn-success btn-sm" href="{{route('admin.editReward',['id' => $reward -> id])}}">Edit <i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm" href="{{route('admin.deleteReward',['id' => $reward -> id])}}" onClick="return confirm('Are you sure to delete?')">Delete <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th class="hidden">--</th>
                            <th scope="row">--</th>
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

@endsection

    

