<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedeemRewardsController extends Controller
{
    //Request users login
    public function __construct() {
        $this->middleware('auth');
    }
}
