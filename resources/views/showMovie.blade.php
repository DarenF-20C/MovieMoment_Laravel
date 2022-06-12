@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Movie Name</td>
                        <td>Movie Desciption</td>
                        <td>Movie's Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$movie->image}}" width="100" class="img-fluid" alt=""></td>
                        <td>{{$movie->name}}</td>
                        <td>{{$movie->description}}</td>
                        <td>{{$movie->price}}</td>
                        <td>{{$movie->quantity}}</td>
                        <td>{{$movie->cName}}</td>
                        <!-- 2 -->
                        <td><a href="{{ route('editMovie',['id'=>$movie->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deleteMovie',['id'=>$movie->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection