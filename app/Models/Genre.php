<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable=['genreType'];

    public function movieGenre(){
        return $this->hasMany('App\Models\MovieGenre');
    }
}
