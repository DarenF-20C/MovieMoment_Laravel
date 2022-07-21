<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
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
