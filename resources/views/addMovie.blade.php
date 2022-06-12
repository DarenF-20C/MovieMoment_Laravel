@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Movie</h3>
        <form action="{{ route('storeMovie') }}" method="POST" enctype="multipart/form-data" >
           @csrf
            <div class="form-group">
                <label for="MovieName">Movie Name</label>
                <input type="text" class="form-control" id="MovieName" name="MovieName">                
            </div>
            <div class="form-group">
                <label for="MovieDescription">Movie Desciption</label>
                <input type="text" class="form-control" id="MovieDescription" name="MovieDescription">                
            </div>
            <div class="form-group">
                <label for="MovieImage">Movie Image</label>
                <input type="file" class="form-control" id="MovieImage" name="MovieImage">                
            </div>
            <div class="form-group">
                <label for="catID">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>                
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection