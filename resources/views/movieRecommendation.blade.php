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
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
    <main id="main">
        <div class="movie">
            <img src="https://images.unsplash.com/photo-1518173835740-f5d14111d76a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=877&q=80" alt="Image">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">9.8</span>
            </div>

            <div class="overview">

                <h3>Overview</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab laudantium accusamus consequuntur explicabo numquam, totam quia illum dicta? Quod, vitae?
            </div>
        </div>

        <div class="movie">
            <img src="https://images.unsplash.com/photo-1518173835740-f5d14111d76a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=877&q=80"
                alt="Image">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">9.8</span>
            </div>

            <div class="overview">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab laudantium accusamus consequuntur explicabo numquam,
                totam quia illum dicta? Quod, vitae?
            </div>
        </div>
        <div class="movie">
            <img src="https://images.unsplash.com/photo-1518173835740-f5d14111d76a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=877&q=80"
                alt="Image">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">9.8</span>
            </div>

            <div class="overview">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab laudantium accusamus consequuntur explicabo numquam,
                totam quia illum dicta? Quod, vitae?
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>