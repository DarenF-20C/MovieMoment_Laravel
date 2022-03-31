<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    use HasFactory;
    protected $fillable=['MovieID','GenreID'];

    public function movie(){
        return $this->belongsTo('App\Models\Movie');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }
}
