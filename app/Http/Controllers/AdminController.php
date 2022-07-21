<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Session;

class AdminController extends Controller
{
    //
    public function showAdmin(){
        $admins = DB::table('users')
        ->where('is_admin','=','1')
        ->latest()
        ->get();
        return view('backend.adminList')->with('admins',$admins);
    }

    public function deleteAdmin($id){
        $admin=User::find($id);
        $admin->delete();
        Session::flash('success',"admin deleted successfully!");
        return redirect()->route('admin.adminList');
    }

    public function showUser(){
        $users = DB::table('users')
        ->where('is_admin','=','0')
        ->latest()
        ->get();
        return view('backend.userList')->with('users',$users);
    }

    public function deleteUser($id){
        $user=User::find($id);
        $user->delete();
        Session::flash('success',"user deleted successfully!");
        return redirect()->route('admin.userList');
    }

    public function showComment(){
        $comments = DB::table('comments')
        ->leftjoin('users','users.id','=','comments.userID')
        ->select('comments.*','users.name as userName')
        ->leftjoin('contents','contents.id','=','comments.ContentID')
        ->select('comments.*','contents.ctDetail as ctDetail')
        ->latest()
        ->get();
        return view('backend.commentList')->with('comments',$comments);
    }

    public function showPost(){
        $comments = DB::table('comments')
        ->leftjoin('users','users.id','=','comments.userID')
        ->select('comments.*','users.name as userName')
        ->latest()
        ->get();
        return view('backend.commentList')->with('comments',$comments);
    }
}
