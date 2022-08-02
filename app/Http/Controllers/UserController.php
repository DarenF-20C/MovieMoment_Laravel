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
        return view('userProfile')->with('users',$users);
    }
}
