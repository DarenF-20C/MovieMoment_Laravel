@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/top10.css')}}">
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/top10.js') }}"></script>
@endpush
<body><br><br>
<div style="min-height:480px">

    <div id="tags"></div>
    <div id="myNav" class="overlay">

<!-- Overlay content -->
<div class="overlay-content" id="overlay-content">

</div>
</div>
     
    </div>
</body>
@endsection