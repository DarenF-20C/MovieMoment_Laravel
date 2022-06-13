@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/movieRecommendation.css')}}">
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@endpush
<body><br><br>
<header>
        <form  id="form">
            <input type="text" placeholder="Search for your movie" id="search" class="search">
        </form>
    </header>
    <div id="tags"></div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev"> << Previous Page </div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page >></div>
    </div>
</body>

