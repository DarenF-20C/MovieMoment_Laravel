@extends('layout')
<title>M&M | My Rewards</title>
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/myReward.css')}}">
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@endpush
<body onload="redeemReward()">
<div class="container-fluid headContainer">
    <div class="row">
        <div class="col-md-12">
           <br><h2 class="slide-right h2">My Reward</h2>
        </div>
    </div>
</div>

<div class="container rewardContainer mb-4">
    <div class="col-md-12">
        <a class="reward" href="{{route('showRewards')}}"><i class="fas fa-arrow-circle-left"></i> Back</a>
    </div>
    <div class="row">
        @if(count($redeem_rewards))
            @foreach($redeem_rewards as $redeem_rewards)
            <div class="col-md-3 ml-4 mr-4 mt-4 mb-4">
                <div class="card" style="width: 19rem;">
                    <img src="{{asset('images/') }}/{{$redeem_rewards->rImage}}" class="card-img-top" alt="reward" height="250px" width="250px" >
                    <div class="card-body">
                        <h5 class="card-title">{{$redeem_rewards->rewardName}}</h5>
                        <p class="card-text">Expired Time: <br><span class="des">{{ Carbon\Carbon::parse($redeem_rewards->time)->addMonths(1) }}</span> </p>
                        <p class="hidden" id="rewardCode" name="rewardCode">{{$redeem_rewards->rCode}}</p>
                        <p class="card-text">Voucher Code: <button type="button" class="rewards" onclick="copyToClipboard('#rewardCode')" data-mdb-toggle="tooltip" title="click to copy" id="copycode">{{$redeem_rewards->rCode}}</button></p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center mt-4 empty">
                <p class="card-tt"><i>No reward has been redeemed. Work hard to earn points and claim your rewards!</i></p>
            </div>
        @endif
    </div>
</div>
@if(Session::has('success'))
    <input type="hidden" id="redeemed" value="1">
@else
    <input type="hidden" id="redeemed" value="2">
@endif
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.28/sweetalert2.all.min.js" integrity="sha512-nWDPZH/tnW5b1KedLPkb9inxNXadIf4qQDoGTxPJcQNMn4XwPIIlmHSPofT821taBuF1t/uiGSOsRrVccwXS4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("body").on("click", "#copycode", function(){
        const Toast = Swal.mixin({
         toast: true,
         showConfirmButton: false,
         timer: 1500,
         timerProgressBar: true,
         didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
         }
      })
      Toast.fire({
         icon: 'success',
         title: "Copied successfully.",
         background: '#242a30',
         color: '#fff',
      })
    })
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function redeemReward() {
        var redeem = parseInt($('#redeemed').val());
        if(redeem==1){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: "Reward redeemed successfully !"
            })
            sessionStorage.removeItem('success'); 
        }
   }
</script>
</body>

@endsection