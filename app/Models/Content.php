<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable=['ctDetail','ctLike','MovieID','UserID'];

    public function content(){
        return $this->belongsTo('App\Models\Content');
    }

    public function contentAttachment(){
        return $this->hasMany('App\Models\ContentAttachment');
    }
}
