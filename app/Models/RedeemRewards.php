<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemRewards extends Model
{
    use HasFactory;
    protected $fillable = ['rewardID','rewardName','userID','timeRedeem'];
}
