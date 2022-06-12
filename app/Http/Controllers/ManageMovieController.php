<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;
use App\Models\Category;
use Session;
use Auth;

class ManageMovieController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('addMovie')->with('categoryID',Category::all());
    }

    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('movieImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addMovie=Movie::create([
            'name'=>$r->movieName,
            'description'=>$r->movieDescription,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Movie create successfully!");
        Return redirect()->route('viewMovie');
    }

    public function delete($id){
        
        $deleteMovie=Movie::find($id);
        $deleteMovie->delete();
        Session::flash('success',"Movie was delete successfully!");
        Return redirect()->route('viewMovie');
    }

    public function edit($id){
        $Movies = Movie::all()->where('id',$id);
        return view('editMovie')->with('movies', $movies)
                                  ->with('categoryID',Category::all());
    }

    public function view(){
        //only admin can access to the page. It will check the account is an user or admin.
        if(Auth::id()!=1){
            Session::flash('success','Admin only allow to access this page!');
            return redirect(route('movies')); 
        }
        // Select categoryID from movie , Select id from categories
        // use join table 
        $viewMovie = DB::table("movies")
        ->leftjoin('categories','categories.id','=','movies.CategoryID')
        ->select('movies.*','categories.name as cName')
        ->get();
        
        return view('showmovie')
        ->with('movies',$viewMovie);
    }

    public function update(){
        $r=request();
        $movies=Movie::find($r->movieID);
        
        if($r->file('movieImage')!=''){
            $image=$r->file('movieImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $movies->image=$imageName;
            } 

            $movies->name=$r->movieName;
            $movies->description=$r->movieDescription;
            $movies->CategoryID=$r->CategoryID;
            $movies->save();

        return redirect()->route('viewMovie');
    }
}
