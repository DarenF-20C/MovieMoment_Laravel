<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable=['mName','mDescription','mRating','mTrailer','status'];
    
    public function movieGenre(){
        return $this->hasMany('App\Models\MovieGenre');
    }

    public function movieViewed(){
        return $this->hasMany('App\Models\MovieViewed');
    }
}
