@extends('layout')
<title>M&M | Top 10 TV Shows</title>
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/top10.css')}}">
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/top10TV.js') }}"></script>
@endpush
<body><br><br>
<div style="min-height:480px">

    <div id="tags"></div>
    <div id="top10">
        
    </div>
    <div id="myNav" class="overlay">
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content" id="overlay-content">

    </div>
</div>
     
    </div>
    <br>
</body>
@endsection