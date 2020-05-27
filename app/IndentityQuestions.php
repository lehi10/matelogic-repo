<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndentityQuestions extends Model
{
    
    protected $fillable = [
        'user_id', 'teacher_id','fs1','fs2','fs3','fs4','fs5','fs6',
        'fl1','fl2','fl3','fl4','fl5',
        'fi1','fi2','fi3','fi4','fi5','fi6','fi7','fi8','fi9','fi10',
        'fi11','fi12','fi13','fi14','fi15','fi16','fi17','fi18','fi19','fi20',
        'fi21','fi22','fi23','fi24','fi25','fi26','fi27','fi28','fi29','fi30',
        'fi31','fi32','fi33','fi34','fi35','fi36'
    ]; 

}
