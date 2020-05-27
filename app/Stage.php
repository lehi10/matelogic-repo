<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
        'user_id', 'teacher_id','f1', 'f2','f3', 'p1','p2','p3', 'h1','h2', 'h3','m1','m2','m3'
    ];
}
