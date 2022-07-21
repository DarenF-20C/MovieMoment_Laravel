<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable=['ContentID','UserID'];

    public function content(){
        return $this->belongsTo('App\Models\Content');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
