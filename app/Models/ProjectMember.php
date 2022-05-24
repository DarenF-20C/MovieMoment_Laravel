<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    use HasFactory;
     protected $fillable=['id','name','image','studentID','batch','telephoneNumber','email','location','addtionalInformation'];
}
