<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemoSurvey extends Model
{
    protected $fillable = [
        'user_id', 'teacher_id','q1','q2','q3','q4','q5','q6','q7','q8','q9',
    ]; 
}
