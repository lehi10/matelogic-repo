<?php

namespace App\Http\Controllers;

use  App\Student;
use Auth;
use Charts;
use Illuminate\Http\Request;


class ProfesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    
    public function show()
    {
        
        if(Auth::user()->role != 1)
            abort(403,"Usuario no autorizado.");
        
        $datos = Student::where('teacher_id',Auth::user()->id)->get();


        
        return view('profesor.index');
    }
}
