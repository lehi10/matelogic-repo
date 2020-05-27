<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'user_id', 'teacher_id','i1', 'i2','i3', 'i4','i5','i6', 'i7','i8', 'i9','i10','i11','i12'
    ]; 
}
