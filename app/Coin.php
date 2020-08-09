<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = [
        'user_id', 'teacher_id','plaza','fundo','molino','hospital',
    ];
}
