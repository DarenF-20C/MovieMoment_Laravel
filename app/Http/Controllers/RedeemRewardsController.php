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
}
