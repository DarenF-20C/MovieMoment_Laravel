<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','CategoryID'];
    public function product(){
        return $this->belongsTo('App\Models\Category');
    }
}
