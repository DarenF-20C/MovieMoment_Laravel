@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/addMembers.css')}}">
@endpush
<div class="row">
<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br><br>
        <h3>Add New Members</h3>
        <form action="{{ route('updateMembers') }}" method="POST" enctype="multipart/form-data" >
           @csrf
           @foreach($projectmembers as $projectmember)
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text-success" class="form-control" id="Name" name="name" value="{{ $projectmember->name}}"> 
                <input type="hidden" name="id" id="id" value="{{ $projectmember->id}}">                        
            </div> 
            <div class="form-group">
                    <label for="images">Images:</label><br>
                    <img src="{{asset('images')}}/{{$projectmember->image}}" alt="" class="img-fluid" width="230"> <br>
                    <input type="file" class="form-control" id="image" name="image" value="">                
                </div>

            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input type="text" class="form-control" id="studentID" name="studentID" value="{{ $projectmember->studentID}}">                
            </div>
            <div class="form-group">
                <label for="batch">Batch:</label>
                <input type="text" class="form-control" id="batch" name="batch" value="{{ $projectmember->batch}}">                
            </div>
            <div class="form-group">
                <label for="telephoneNumber">H/P:</label>
                <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" value="{{ $projectmember->telephoneNumber}}">                
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $projectmember->email}}">                
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $projectmember->location}}" >                
            </div>
            <div class="form-group">
                <label for="addtionalInformation">Additional Information:</label>
                <Textarea class="form-control" id="addtionalInformation" name="addtionalInformation" rows="5">{{ $projectmember->addtionalInformation}}</textarea>               
            </div><br>

            @endforeach
             <button type="submit" class="btn btn-primary">Add New Member</button>
                <br><br>
                </form>
    <div class="col-sm-3"></div>
</div>
@endsection 