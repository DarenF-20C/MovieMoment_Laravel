<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentAttachment extends Model
{
    use HasFactory;
    protected $fillable=['ctImage','ctVideo','ContentID'];

    public function content(){
        return $this->belongsTo('App\Models\Content')->withTimestamps();
    }
}
