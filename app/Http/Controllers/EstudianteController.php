<?php

namespace App\Http\Controllers;
use  App\Student;
use Auth;
use Illuminate\Http\Request;


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

    public function form_demog_show(Request $request){
        if(Auth::user()->role != 0)
        abort(403,"Usuario no autorizado.");
        

        return view('demoform.index');
    }
    
    public function form_demog_save(Request $request){

    }

    public function saveForm(Request $request)
    {
        if(Auth::user()->role != 0)
            abort(403,"Usuario no autorizado.");

        
        $student = Student::where("user_id",Auth::user()->id)->get()[0];
        
        $student->q1 =$request->q1;
        $student->q2 =$request->q2;
        $student->q3 =$request->q3;
        $student->q4 =$request->q4;
        $student->q5 =$request->q5;
        $student->q6 =$request->q6;
        $student->q7 =$request->q7;
        $student->q8 =$request->q8;
        $student->q9 =$request->q9;
        $student->q10=$request->q10;
        $student->q11=$request->q11;
        $student->q12=$request->q12;
        $student->q13=$request->q13;
        $student->q14=$request->q14;
        $student->q15=$request->q15;

        $student->save();
        
        return redirect("/estudiante")->with('status', 'Guardado !');
    }
}
