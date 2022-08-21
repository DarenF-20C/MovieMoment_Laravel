<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable=['ctDetail','ctDate','ctTime','UserID'];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function contentAttachment(){
        return $this->hasMany('App\Models\ContentAttachment')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function likedUsers(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}
