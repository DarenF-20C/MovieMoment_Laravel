@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/redeemRewards.css')}}">
@endpush
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
        <br><br>
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dear {{ Auth::user()->name }},</strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row confirmRedeem">
        <div class="col-md-12 mt-4 mb-4 text-center">
            <h1 class="display-1">Confirm Reward Redemption</h1>
        </div>
    </div>
</div>

<form action="{{ route('confirmRedeem') }}" method="POST">
    @csrf
    @foreach($rewards as $reward)
    <input type="hidden" class="form-control hidden" id="rewardID" name="rewardID" value="{{$reward->id}}">
    <input type="hidden" class="form-control hidden" id="rewardName" name="rewardName" value="{{$reward->name}}">
    <input type="hidden" class="form-control hidden" id="rewardQuantity" name="rewardQuantity" value="{{$reward->quantity}}">
    <input type="hidden" class="form-control hidden" id="userPoint" name="userPoint" value="{{ Auth::user()->points - $reward->points}}">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <a class="backbutton" href="{{route('showRewards')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4 mb-4 text-center">
                <h1>Are you sure you want to redeem <strong class="strongname">{{$reward->name}} </strong> ? </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/') }}/{{$reward->image}}" alt="reward" class="images" height="430px" width="400px">
            </div>
            <div class="col-md-8">
                <h2 class="Titles">Product Description:</h2>
                <p class="des">{!! $reward->description !!}</p>
                <h2 class="Titles">Points required to redeem:</h2>
                <p class="des">{{$reward->points}}</p>
                <h2 class="Titles">Quantity left:</h2>
                <p class="des">{{$reward->quantity}}</p>
                <p class="confirm">If you confirmed to spend <b class="orange" id="rewardPoints">{{$reward->points}} </b> points to redeem <b class="orange">{{$reward->name}}</b>, please press the "Redeem" button.</p>
                <p class="confirm">Your total point is <b class="orange">{{ Auth::user()->points }}</b>.</p>
                @if($reward->quantity > 0)
                <button type="submit" class="btn btn-primary" id="redeemBtn">Redeem</button><br><br>
                @else
                <a class="backbutton" href="{{route('showRewards')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </a>
                <p class="confirm">Attention: Sorry, the reward is not available. Please choose another rewards. </p>
                @endif
            </div>
        </div>
    </div>
    <br>

    <script>
        var quantityDec = 1;
        var quantity = document.getElementById('rewardQuantity').value;
        var redeemBtn = document.getElementById('redeemBtn');
        var backBtn = document.getElementById('backBtn');
        var userPoint = document.getElementById('userPoint').value;
        var rewardPoints = document.getElementById('rewardPoints').value;
        if(userPoint < 0){
            alert('Please gain more points to redeem rewards!');
            redeemBtn.classList.add('hidden');
        } 
        if(quantity > 0){
            quantity -= quantityDec;
        }
        document.getElementById('rewardQuantity').value=quantity;
    </script>
    @endforeach

</form>
@endsection