@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/myReward.css')}}">
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@endpush
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
           <br><h1 class="display-1">My Reward</h1>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4">
    <div class="col-md-12 mt-4 mb-4">
        <a class="reward" href="{{route('showRewards')}}">Back</a>
    </div>
    <div class="row">
        @if(count($redeem_rewards))
            @foreach($redeem_rewards as $redeem_rewards)
            <div class="col-md-3 ml-4 mr-4 mt-4 mb-4">
                <div class="card" style="width: 19rem;">
                    <img src="{{asset('images/') }}/{{$redeem_rewards->rImage}}" class="card-img-top rounded-start" alt="reward" height="350px" width="250px" >
                    <div class="card-body">
                        <h5 class="card-title">{{$redeem_rewards->rewardName}}</h5>
                        <p class="card-text">Redeem Time: <br><span class="des">{{$redeem_rewards->time}}</span> </p>
                        <p class="hidden" id="rewardCode" name="rewardCode">{{$redeem_rewards->rCode}}</p>
                        <p class="card-text">Voucher Code: <button type="button" class="rewards" onclick="copyToClipboard('#rewardCode')">{{$redeem_rewards->rCode}}</button></p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center mt-4">
                <p class="card-tt"><i>No reward has been redeemed. Work hard to earn points and claim your rewards!</i></p>
            </div>
        @endif
    </div>
</div>
</div>
</body>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>
@endsection