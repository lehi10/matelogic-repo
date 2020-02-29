<?php

namespace App\Http\Controllers;
use  App\Student;
use Auth;


class EstudianteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       

    }

    public function show()
    {
        if(Auth::user()->role != 0)
            abort(403,"Usuario no autorizado.");
        
        $datos = Student::where('user_id',Auth::user()->id)->get()[0];


        return view('estudiante.index',['datos_estudiante'=>$datos]);
    }
}
