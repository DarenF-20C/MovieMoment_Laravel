<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Content;
use App\Models\Comment;
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
        ->leftjoin('contents','contents.id','=','comments.content_id')
        ->select('comments.*','contents.ctDetail as ctDetail','users.name as userName')
        ->latest()
        ->get();
        return view('backend.commentList')->with('comments',$comments);
    }

    public function deleteComment($id){
        $comment=Comment::find($id);
        $comment->delete();
        Session::flash('success',"Comment deleted successfully!");
        return redirect()->route('admin.commentList');
    }

    public function showPost(){
        $posts = DB::table('contents')
        ->leftjoin('users','users.id','=','contents.userID')
        ->select('contents.*','users.name as userName')
        ->latest()
        ->get();
        return view('backend.postList')->with('posts',$posts);
    }
    public function deletePost($id){
        $post=Content::find($id);
        $post->delete();
        Session::flash('success',"Post deleted successfully!");
        return redirect()->route('admin.postList');
    }
    
    public function adminHome()
    {
        $totalUser = DB::table('users')
        ->where('is_admin','=','0')
        ->count();

        $totalAdmin = DB::table('users')
        ->where('is_admin','=','1')
        ->count();

        $totalComment = DB::table('comments')
        ->count();

        $totalPost = DB::table('contents')
        ->count();

        return view('backend.admin-home', compact('totalUser', 'totalAdmin','totalComment','totalPost'));


        
    }
}

