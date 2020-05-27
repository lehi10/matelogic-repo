<?php

namespace App\Http\Controllers;

use  App\Student;
use  App\Interest;
use  App\Stage;
use  App\Valoration;
use  App\IndentityQuestions;
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

        $counters=[0,0,0];

        foreach ($datos as $row) {
            $counters[0]+=$row->nunca;
            $counters[1]+=$row->aveces;
            $counters[2]+=$row->siempre;            
        }


        $questions = IndentityQuestions::where('teacher_id',Auth::user()->id)->get();

        $selection0intents=0;        
        $locations0intents=0;        
        $integrative0intents=0;
        
        $selection0Moreintents=0;        
        $locationsMoreintents=0;        
        $integrativeMoreintents=0;
        
        

        foreach ($questions as $row) {


            $row->fs1 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null ) ;
            $row->fs2 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null) ;
            $row->fs3 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null) ;
            $row->fs4 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null) ;
            $row->fs5 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null) ;
            $row->fs6 === 1 ? $selection0intents ++ : ( $row->fs1 > 1 ? $selection0Moreintents++: null) ;
            
            $row->fl1 === 1 ? $locations0intents ++ : ( $row->fl1 > 1 ? $locationsMoreintents++: null) ;
            $row->fl2 === 1 ? $locations0intents ++ : ( $row->fl2 > 1 ? $locationsMoreintents++: null) ;
            $row->fl3 === 1 ? $locations0intents ++ : ( $row->fl3 > 1 ? $locationsMoreintents++: null) ;
            $row->fl4 === 1 ? $locations0intents ++ : ( $row->fl4 > 1 ? $locationsMoreintents++: null) ;
            $row->fl5 === 1 ? $locations0intents ++ : ( $row->fl5 > 1 ? $locationsMoreintents++: null) ;

            $row->fi1 === 1 ? $locations0intents ++ : ( $row->fi1 > 1 ? $integrativeMoreintents++: null) ;
            $row->fi2 === 1 ? $locations0intents ++ : ( $row->fi2 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi3 === 1 ? $locations0intents ++ : ( $row->fi3 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi4 === 1 ? $locations0intents ++ : ( $row->fi4 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi5 === 1 ? $locations0intents ++ : ( $row->fi5 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi6 === 1 ? $locations0intents ++ : ( $row->fi6 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi7 === 1 ? $locations0intents ++ : ( $row->fi7 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi8 === 1 ? $locations0intents ++ : ( $row->fi8 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi9 === 1 ? $locations0intents ++ : ( $row->fi9 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi10 === 1 ? $locations0intents ++ : ( $row->fi10 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi11 === 1 ? $locations0intents ++ : ( $row->fi11 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi12 === 1 ? $locations0intents ++ : ( $row->fi12 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi13 === 1 ? $locations0intents ++ : ( $row->fi13 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi14 === 1 ? $locations0intents ++ : ( $row->fi14 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi15 === 1 ? $locations0intents ++ : ( $row->fi15 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi16 === 1 ? $locations0intents ++ : ( $row->fi16 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi17 === 1 ? $locations0intents ++ : ( $row->fi17 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi18 === 1 ? $locations0intents ++ : ( $row->fi18 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi19 === 1 ? $locations0intents ++ : ( $row->fi19 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi20 === 1 ? $locations0intents ++ : ( $row->fi20 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi21 === 1 ? $locations0intents ++ : ( $row->fi21 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi22 === 1 ? $locations0intents ++ : ( $row->fi22 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi23 === 1 ? $locations0intents ++ : ( $row->fi23 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi24 === 1 ? $locations0intents ++ : ( $row->fi24 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi25 === 1 ? $locations0intents ++ : ( $row->fi25 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi26 === 1 ? $locations0intents ++ : ( $row->fi26 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi27 === 1 ? $locations0intents ++ : ( $row->fi27 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi28 === 1 ? $locations0intents ++ : ( $row->fi28 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi29 === 1 ? $locations0intents ++ : ( $row->fi29 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi30 === 1 ? $locations0intents ++ : ( $row->fi30 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi31 === 1 ? $locations0intents ++ : ( $row->fi31 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi32 === 1 ? $locations0intents ++ : ( $row->fi32 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi33 === 1 ? $locations0intents ++ : ( $row->fi33 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi34 === 1 ? $locations0intents ++ : ( $row->fi34 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi35 === 1 ? $locations0intents ++ : ( $row->fi35 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi36 === 1 ? $locations0intents ++ : ( $row->fi36 > 1 ? $integrativeMoreintents++: null)  ;
               
        }



        $oneIntents = [$selection0intents,$locations0intents,$integrative0intents];
        $moreIntents = [$selection0Moreintents, $locationsMoreintents, $integrativeMoreintents];
        $totalRows = count($questions);

        $stage = Stage::where('teacher_id',Auth::user()->id)->get();


        $fundoFierro=0;
        $plazaArmas=0;
        $hospital=0;
        $molino=0;

        $f1=0;
        $f2=0;
        $f3=0;

        $p1=0;
        $p2=0;
        $p3=0;

        $h1=0;
        $h2=0;
        $h3=0;

        $m1=0;
        $m2=0;
        $m3=0;

        foreach ($stage as $row) {
            $f1+=$row->f1;
            $f2+=$row->f2;
            $f3+=$row->f3;

            $p1+=$row->p1;
            $p2+=$row->p2;
            $p3+=$row->p3;

            $h1+=$row->h1;
            $h2+=$row->h2;
            $h3+=$row->h3;

            $m1+=$row->m1;
            $m2+=$row->m2;
            $m3+=$row->m3;

            $fundoFierro += ($row->f1+$row->f2+$row->f3);
            $plazaArmas += ($row->p1+$row->p2+$row->p3);
            $hospital += ($row->h1+$row->h2+$row->h3);
            $molino += ($row->m1+$row->m2+$row->m3);
        }

        $metricsObjSelected = [$f1,$f2,$f3,$p1,$p2,$p3,$h1,$h2,$h3,$m1,$m2,$m3];
        $scoreAcc = [$fundoFierro, $plazaArmas, $hospital, $molino=0];

        
        return view('profesor.index',[
            'counters'=>$counters, 
            'oneIntents'=>$oneIntents, 
            'moreIntents'=>$moreIntents, 
            'totalRows'=>$totalRows,
            'metricsObjSelected'=>$metricsObjSelected,
            'scoreAcc'=>$scoreAcc]
        );
    }
}
