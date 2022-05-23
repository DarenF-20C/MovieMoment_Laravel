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
        <form action="{{ route('addMembers') }}" method="POST" enctype="multipart/form-data" >
           @csrf
           <div class="form-group">
           <label for="ID">Id:</label>
           <input class="form-control" type="text" placeholder="Member ID" readonly>     
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text-success" class="form-control" id="formcontrols" name="name">                
            </div>
            <div class="form-group">
                    <label for="Images">Images:</label>
                    <input type="file" class="form-control addmember" id="Images" name="Images">                
                </div>
            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input type="text" class="form-control" id="studentID" name="studentID">                
            </div>
            <div class="form-group">
                <label for="batch">Batch:</label>
                <input type="text" class="form-control" id="batch" name="batch">                
            </div>
            <div class="form-group">
                <label for="telephoneNumber">H/P:</label>
                <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber">                
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">                
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location">                
            </div>
            <div class="form-group">
                <label for="addtionalInformation">Additional Information:</label>
                <Textarea class="form-control" id="addtionalInformation" name="addtionalInformation" rows="5"> </textarea>               
            </div><br>
             <button type="submit" class="btn btn-primary">Add New Member</button>
                <br><br>
                </form>
    <div class="col-sm-3"></div>
</div>
@endsection