@extends('layout')
<title>M&M | Points Redeem Center</title>
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/rewardList.css')}}">
@endpush
<body><br><br>
<div class="container">
    <h2 class="slide-right h2">Points Redeem Center</h2>
    <div class="row pointSearch">
        <div class="col-md-6">
            <h6 class="totalpoints">Total points: <strong>{{ Auth::user()->points }}</strong> <a class="reward" href="{{route('showMyReward')}}">My Reward</a></h6>
            
        </div>
        <div class="col-md-6 wholesearchbar"> 
            <form class="form-inline my-2 my-lg-0" action="{{route('searchRewards')}}" method="post">
            @csrf
                <input type="search" placeholder="Search for rewards" id="search" class="search searchbar" aria-label="Search" name="keyword">
                <button class="btn btn-primary searchbar icon" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> 
                <button class="btn btn-primary searchbar icon" type="submit" action="{{route('showRewards')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>        
            </form>
        </div>
    </div>
</div>


<div class="container mt-4 mb-4">
    <div class="row">
        @if(count($rewards))
            @foreach($rewards as $reward)
            <div class="col-md-3 ml-4 mr-4 mt-4 mb-4">
                <div class="card" style="width: 19rem;">
                    <img src="{{asset('images/') }}/{{$reward->image}}" class="card-img-top" alt="reward" height="250px" width="250px">
                    <div class="card-body">
                        <h5 class="card-title">{{$reward->name}}</h5>
                        <p class="hidden">{{$reward->id}}</p>
                        <p class="card-text"><b class="des">Points :</b> {{$reward->points}}</i></p>
                        <p class="card-text"><b class="des">Quantity:</b><i class="card-text"> Only {{$reward->quantity}} item left !! </i></p>
                        <div class="buttoncenter"><a class="rewardView" href="{{route('redeemRewards',['id'=>$reward->id])}}">View</a> </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center mt-4">
                <p><i>No rewards to redeem. Please wait until any further update from our admin. 
                    If you facing any questions, feel free to fill up the contact us form. Thank you.
                </i></p>
            </div>
        @endif
    </div>
</div>
</body>
@endsection