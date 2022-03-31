<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieViewed extends Model
{
    use HasFactory;
    protected $fillable=['MovieID','UserID'];

    public function movie(){
        return $this->belongsTo('App\Models\Movie');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

