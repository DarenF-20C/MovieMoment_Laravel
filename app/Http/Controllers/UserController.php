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
    
    public function editProfile($id){
        $users=User::all()->where('id',$id);
        return view('editProfile')->with('users',$users);
    }

    public function updateProfile(){
        $r=request();
        $users= User::find($r->userID);
        if($r->file('image')!=''){
            //upload image before add to DB
            $image=$r->file('userAvatar');
            $imageName=date('YmdHi').$image->getClientOriginalName();
            $image->move('images/user',$imageName);
            $users->image=$imageName;                
        }

        $users->name=$r->name;
        $users->email=$r->email;
        $users->gender=$r->gender;
        $users->phone=$r->phone;
        $users->date=$r->date;
        $users->save();

        return redirect()->route('userProfile');
    }
    
    public function editPassword($id) {
        $users=User::all()->where('id',$id);
        return view('editPassword')->with('users',$users);
    }

    public function updatePassword(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }
}
