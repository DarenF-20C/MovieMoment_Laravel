<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\ProjectMember;

class MemberController extends Controller
{
    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('');        
        $image->move('Images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addMembers=ProjectMember::create([
            'name'=>$r->name,
            'studentID'=>$r->studentID,
            'batch'=>$r->batch,
            'telephoneNumber'=>$r->telephoneNumber,
            'email'=>$r->email,
            'location'=>$r->location,
            'addtionalInformation'=>$r->addtionalInformation,  
         ]);
    }
}
