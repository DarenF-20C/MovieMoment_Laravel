<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import database library
use App\Models\Category; //import category model
use Session;

class CategoryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('addCategory');
    }

    public function store(){
        $r=request();   //received the data by GET or POST method  $_POST['name']
        $storeCategory = Category::create([ 
            'id' => $r->id,  
            'name'=> $r->categoryName, 
        ]);

        Session::flash('success',"Category create succesful!");
        Return redirect()->route('viewCategory');
    }

    public function view(){
        $viewCategory=Category::all(); //generate SQL select * from categories
        Return view('showCategory')->with('categories',$viewCategory);
    }
}
