@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/movieRecommendation.css')}}">
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@endpush
<body><br><br>
<div style="min-height:480px">
<header>
        <form  id="form">
            <input type="text" placeholder="Search for your movie" id="search" class="search">
        </form>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content" id="overlay-content">

</div>
</div>
    <main id="main"></main> 
    <div class="pagination">
        <div class="page" id="prev"> << Previous Page </div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page >></div>
    </div>
    </div>
</body>

