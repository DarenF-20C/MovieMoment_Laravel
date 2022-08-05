<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function userProfile($id){
        $users=User::all()->where('id',$id);

        $totalComment = DB::table('comments')
        ->leftjoin('users','users.id','=','comments.userID')
        ->where('comments.userID','=',Auth::id())
        ->count();

        $totalPost = DB::table('contents')
        ->leftjoin('users','users.id','=','contents.userID')
        ->where('contents.userID','=',Auth::id())
        ->count();

        return view('userProfile', compact('totalComment','totalPost'))->with('users',$users);

    }

    public function edit(){
        $r=request();
        $users=User::find($r->userID);
        
        if($r->file('image')!=''){
            //upload image before add to DB
            $image=$r->file('userAvatar');
            $imageName= date('YmdHi').$image->getClientOriginalName();
            $image->move('images/user',$imageName);
            $userAvatar['userAvatar']=$imageName;
        }else{
            $userAvatar['userAvatar']="user.jpg"; 
            } 

            $users->name=$r->name;
            $users->email=$r->email;
            $users->gender=$r->gender;
            $users->phone=$r->phone;
            $users->date=$r->date;
            $users->save();

        return redirect()->route('userProfile');
    }
}
