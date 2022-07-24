<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\reward;
use Auth;
use Session;

class RewardController extends Controller
{   
    //Require user login
    public function __construct() {
      $this->middleware('auth');
    }
    
    //Index Views [Admin]
    public function index(){
       return view('backend.addReward');
    }

    // Store Reward [Admin]
    public function store(){
    $r = request();
    //image
    $image=$r->file('rewardImage');  
    $image->move('images',$image->getClientOriginalName());   //images is the location       
    $imageName=$image->getClientOriginalName();
    //image
    $storeReward = reward::create([
        'name'=>$r->rewardName,
        'image'=>$imageName,
        'description'=>$r->rewardDescription,
        'points'=>$r->pointsValue,
        'quantity'=>$r->rewardQuantity,
        'code'=>$r->rewardCode,
    ]);
    Session::flash('success',"your reward is created successfully!");
    return back();
    }

    //Upload image [Admin]
    public function uploadPhoto(Request $request){
        $rewards = new Reward();
        $rewards->id=0;
        $rewards->exists = true;
        $image = $rewards->addMediaFromRequest('upload')->toMediaCollection('/public/images');
        return response()->json([
            'url' =>$image->getUrl()
        ]);
    }

    //Show Reward [Admin]
       public function showRewardList(){
        $rewards = DB::table('rewards')
        ->latest()
        ->get();
        return view('backend.showReward')->with('rewards',$rewards);
    }
       
    //Search reward in rewardList [Admin]
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $rewards = reward::query()
        ->where('name','LIKE','%'.$keyword.'%')  
        ->orwhere('code','LIKE','%'.$keyword.'%')     
        ->get();
        return view('backend.showReward')->with('rewards',$rewards);
    }

    //Edit Reward [Admin]
    public function edit($id){
        $rewards = reward::all()->where('id',$id);
        return view('backend.editReward')->with('rewards',$rewards);
    }
    
    //Update Reward [Admin]
    public function update(){
        $r=request();
        $rewards= reward::find($r->rewardID);
        if($r->file('rewardImage')!=''){
            $image=$r->file('rewardImage');  
            $image->move('images',$image->getClientOriginalName());   //images is the location       
            $imageName=$image->getClientOriginalName();
            $rewards->image=$imageName;
        }

        $rewards->name=$r->rewardName;
        $rewards->description=$r->rewardDescription;
        $rewards->points=$r->pointsValue;
        $rewards->quantity=$r->rewardQuantity;
        $rewards->code=$r->rewardCode;
        $rewards->save();
        return redirect()->route('admin.rewardList');  
    }

    //Delete Reward [Admin]
    public function delete($id){
        $rewards = reward::find($id);
        $rewards->delete();
        Session::flash('success',"Reward delete successfully!");
        return redirect()->route('admin.rewardList');
    }

    //show reward for users [Users]
    public function showRewards(){
        $rewards = DB::table('rewards')
        ->where('rewards.quantity','!=','0')
        ->latest()
        ->get();
        return view('rewardList')->with('rewards',$rewards);
    }
}
