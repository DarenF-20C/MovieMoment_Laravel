<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\Reward;
use App\Models\RedeemRewards;
use Carbon\Carbon;

class RedeemRewardsController extends Controller
{
    //Request users login
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function redeemRewards($id){
        $rewards = Reward::all()->where('id',$id);
        return view('confirmRedeem')->with('rewards',$rewards);
    }

    public function confirmRedeem(){
        $r=request();
        $currentTime = Carbon::now("GMT+8");
        $storeRedeemRecord = RedeemRewards::create([
            'rewardID'=>$r->rewardID,
            'rewardName'=>$r->rewardName,
            'userID'=>Auth::id(),
            'time'=>$currentTime->toDateTimeString(),
        ]);
        $user = auth()->user();
        $rewards= Reward::find($r->rewardID);
        $rewards->quantity = $r->rewardQuantity;
        $user->points=$r->userPoint;
        $user->save();
        $rewards->save();
        Session::flash('success',"Your reward is redeemed successfully!");
        return redirect()->route('showMyReward');
    }

    public function myReward(){
        return view('myReward');
    }
    
    public function showMyReward(){
        $showReward = DB::table('redeem_rewards')
        ->where('userID','=',Auth::id())
        ->leftjoin('rewards','rewards.id','=','redeem_rewards.rewardID')
        ->select('redeem_rewards.*','rewards.code as rCode','rewards.image as rImage')
        ->get();
        return view('myReward')->with('redeem_rewards',$showReward);
    }

        //Index Views [Admin]

        public function showRewardsRedemption(){
            $showReward = DB::table('redeem_rewards')
            ->leftjoin('rewards','rewards.id','=','redeem_rewards.rewardID')
            ->select('redeem_rewards.*','rewards.code as rCode','rewards.image as rImage')
            ->leftjoin('users','users.id','=','redeem_rewards.userID')
            ->select('redeem_rewards.*','users.name as userName')
            ->get();
            return view('backend.userRedemption')->with('redeem_rewards',$showReward);
        }

        //Delete [Admin]
        public function deleteRedemption($id){
        $rewards = RedeemRewards::find($id);
        $rewards->delete();
        Session::flash('Success',"It is deleted successfully!");
        return redirect()->route('admin.showRewardsRedemption');
    }
    

        

}