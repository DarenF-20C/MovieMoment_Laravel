@extends('layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/showMembers.css')}}">
@endpush
<!-- Show Members for Admin Page -->
<p class="Title">Project Member Lists</p>
<div class="container">
    <div class="row">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Student ID</td>
                            <td>Batch</td>
                            <td>TelephoneNumber</td>
                            <td>Email</td>
                            <td>Location</td>
                            <td>Additional Information</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ProjectMember as $ProjectMember)
                        <tr class="bodytr">
                            <td> {{$ProjectMember->id}} </td>
                            <td><img src="{{ asset('images/') }}/{{$ProjectMember->image}}" width="150" height="110" class="img-fluids" alt=""></td>
                            <td class="abc" >{{$ProjectMember->name}}</td>
                            <td >{{$ProjectMember->studentID}}</td>
                            <td >{{$ProjectMember->batch}}</td>
                            <td >{{$ProjectMember->telephoneNumber}}</td>
                            <td >{{$ProjectMember->email}}</td>
                            <td >{{$ProjectMember->location}}</td>
                            <td >{{$ProjectMember->addtionalInformation}}</td>
                            <td><a href="" class="btn btn-warning btn-sm" style="margin-bottom:5px;">Edit</a> <br> 
                            <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete?')">Delete</a>
</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <br><br>
        </div>
    </div>
    <div class="col-sm-3"></div>
@endsection
