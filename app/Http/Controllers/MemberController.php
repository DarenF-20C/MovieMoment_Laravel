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
        $image=$r->file('image');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName();
        $addMembers=ProjectMember::create([
            'name'=>$r->name,
            'image'=>$imageName,
            'studentID'=>$r->studentID,
            'batch'=>$r->batch,
            'telephoneNumber'=>$r->telephoneNumber,
            'email'=>$r->email,
            'location'=>$r->location,
            'addtionalInformation'=>$r->addtionalInformation,  
         ]);
         Return redirect()->route('viewMembers');
    }

    public function view(){
        $viewMembers=ProjectMember::all(); //generate SQL select * from categories
        Return view('showMembers')->with('ProjectMember',$viewMembers);
    }

    public function listMembers(){
        $listMembers=ProjectMember::all();
        return view('showProjectMembers')->with('ProjectMember',$listMembers);
    }

    public function delete($id){
        $deleteMembers=ProjectMember::find($id);
        $deleteMembers->delete();
        Return redirect()->route('viewMembers');
    }

    public function edit($id){
        $projectmembers = ProjectMember::all()->where('id',$id);
        return view('editMembers')->with('projectmembers',$projectmembers);
    }

    public function update(){
        $r=request();
        $projectmember=ProjectMember::find($r->id);

        if($r->file('image')!='') {
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());   //images is the location                
            $imageName=$image->getClientOriginalName();
            $projectmember->image=$imageName;
        }

        $projectmember->name=$r->name;
        $projectmember->studentID=$r->studentID;
        $projectmember->batch=$r->batch;
        $projectmember->telephoneNumber=$r->telephoneNumber;
        $projectmember->email=$r->email;
        $projectmember->location=$r->location;
        $projectmember->addtionalInformation=$r->addtionalInformation; 
        $projectmember->save();
    
        return redirect()->route('showMembers');   
        }
    }

