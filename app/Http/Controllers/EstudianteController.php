<?php

namespace App\Http\Controllers;
use  App\Student;
use App\DemoSurvey;
use App\Usability;
use Auth;
use Illuminate\Http\Request;
use App\Coin;
use App\Star;
use App\Item;
use App\IndentityQuestions;

class EstudianteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function identidad(){
        return 0;
    }

    public function starsMetric(){
        $studentStar = Star::where("user_id",Auth::user()->id)->get()[0];

        return $studentStar; 
    }

    public function coinMetric() {
        $coins = Coin::where("user_id",Auth::user()->id)->get()[0];

        return $coins; 
    }

  public function identityFunctionMetric(){
        $row = IndentityQuestions::where("user_id",Auth::user()->id)->get()[0];

        $fs = 0;
        $fl = 0;
        $fi = 0;

        for($i =1; $i<=6 ;$i++){
          $fs=$row["fs$i"]== 1 ? $fs + 1 : 0; 
        }
        for($i =1; $i<=5 ;$i++){
          $fl=$row["fl$i"]== 1 ? $fl + 1 : 0; 
        }
        for($i =1; $i<=36 ;$i++){
          $fi=$row["fi$i"]== 1 ? $fi + 1 : 0; 
        }
        $total = $fs+ $fl + $fi;

       

        return Array('selectiva'=>$fs,'locativa'=>$fl,'integrativa'=>$fi,'total'=>$total);
    }

    public function firstIntentMetric(){
      $row = IndentityQuestions::where("user_id",Auth::user()->id)->get()[0];

      $fs = 0;
      $fl = 0;
      $fi = 0;

      for($i =1; $i<=6 ;$i++){
        $fs=$row["fs$i"]== 1 ? $fs + 1 : 0; 
      }
      for($i =1; $i<=5 ;$i++){
        $fl=$row["fl$i"]== 1 ? $fl + 1 : 0; 
      }
      for($i =1; $i<=36 ;$i++){
        $fi=$row["fi$i"]== 1 ? $fi + 1 : 0; 
      }
      $total = $fs+ $fl + $fi;

     

      return Array('total'=>$total);
  }

    public function correctIncorrectMetric(){
        $row = IndentityQuestions::where("user_id",Auth::user()->id)->get()[0];

        $fs = 0;
        $fl = 0;
        $fi = 0;

        $wfs = 0;
        $wfl = 0;
        $wfi = 0;


        for($i =1; $i<=6 ;$i++){
          if($row["fs$i"]== 1)
            $fs++;
          elseif($row["fs$i"] > 1)
            $wfs++;
        }
        for($i =1; $i<=5 ;$i++){
          if($row["fl$i"]== 1)
            $fl++;
          elseif($row["fl$i"] > 1)
            $wfl++;
        }
        for($i =1; $i<=36 ;$i++){
          if($row["fi$i"]== 1)
            $fi++;
          elseif($row["fi$i"] > 1)
            $wfi++;
        }

        $totalCorrect = $fs+ $fl + $fi;
        $totalIncorrect = $wfs+ $wfl + $wfi;

        return Array('totalCorrect'=>$totalCorrect, 'totalIncorrect'=>$totalIncorrect);
    }

    public function storeMetric() {
        $row = Item::where("user_id",Auth::user()->id)->get()[0];

        $valoracion = $row['obj1']+$row['obj2']+$row['obj3']+$row['obj4']+$row['obj5']+$row['obj6']+$row['obj7']+$row['obj8']+$row['obj9']+$row['obj10'];
        $interes = $row['obj11']+$row['obj12']+$row['obj13']+$row['obj14']+$row['obj15']+$row['obj16']+$row['obj17']+$row['obj18']+$row['obj19']+$row['obj20']+$row['obj21']+$row['obj22'];
        $percepcion = $row['obj23']+$row['obj24'];

        return Array("valoracion"=>$valoracion, "interes"=>$interes,"percepcion"=>$percepcion); 
    }

    public function show()
    {   

        
        if(Auth::user()->role != 0)
        abort(403,"Usuario no autorizado.");

        $datos = Student::where('user_id',Auth::user()->id)->get()[0];


        if($datos["demoSurveyCompleted"] === 0)
            return redirect("/demoform");
        if($datos["identSurveyCompleted"] === 0)
            return redirect("/identityform");

        $encuestaIdentidad = Student::where('user_id',Auth::user()->id)->get()[0];
        $demoSurvey = DemoSurvey::where('user_id',Auth::user()->id)->get()[0];

        $stars= $this->starsMetric();
        // return  $stars;
        $coins= $this->coinMetric();
        $storeMetric = $this->storeMetric();
        $identityFunctionMetric = $this->identityFunctionMetric();
        $correctIncorrectMetric = $this->correctIncorrectMetric();
        $firstIntentMetric= $this->firstIntentMetric();
        
        return view('estudiante.index', ['encuesta_identidad'=>$encuestaIdentidad,
                                        'demoSurvey'=>$demoSurvey,
                                        'stars'=>$stars,
                                        'coins'=>$coins,
                                        'storeMetric'=>$storeMetric,
                                        'identityFunctionMetric'=>$identityFunctionMetric,
                                        'correctIncorrectMetric'=>$correctIncorrectMetric,
                                        'firstIntentMetric'=>$firstIntentMetric,
                                        'nameStudent'=>Auth::user()->name,
                                        'classromID'=> $datos["teacher_id"]]);
    }

    public function demoform_show(Request $request){
        if(Auth::user()->role != 0)
        abort(403,"Usuario no autorizado.");
        return view('estudiante.demoform');
    }
    
    public function demoform_save(Request $request){
        if(Auth::user()->role != 0)
        abort(403,"Usuario no autorizado.");
        

        $survey = DemoSurvey::where("user_id",Auth::user()->id)->get()[0];
        $survey->q1 = $request->direccion;
        $survey->q2 = $request->l_nac;
        $survey->q3 = $request->l_nac_padre;
        $survey->q4 = $request->l_nac_madre;
        $survey->q5 = $request->sexo;
        $survey->q6 = $request->idioma;
        $survey->q7 = $request->cuidad_identificado;
        $survey->q8 = $request->plato_tipico;
        $survey->q9 = $request->animal_tipico;
        $survey->save();
        

        $datos = Student::where('user_id',Auth::user()->id)->get()[0];
        $datos->demoSurveyCompleted = 1;

        $datos->save();

        return redirect("/estudiante")->with('status', 'Guardado !');
    }

    public function identityform_save(Request $request)
    {
        if(Auth::user()->role != 0)
            abort(403,"Usuario no autorizado.");

        $preguntas = [0,0,0];

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


        $preguntas[$request->q1] +=1;
        $preguntas[$request->q2] +=1;
        $preguntas[$request->q3] +=1;
        $preguntas[$request->q4] +=1;
        $preguntas[$request->q5] +=1;
        $preguntas[$request->q6] +=1;
        $preguntas[$request->q7] +=1;
        $preguntas[$request->q8] +=1;
        $preguntas[$request->q9] +=1;
        $preguntas[$request->q10] +=1;
        $preguntas[$request->q11] +=1;
        $preguntas[$request->q12] +=1;
        $preguntas[$request->q13] +=1;
        $preguntas[$request->q14] +=1;
        $preguntas[$request->q15] +=1;
        $student->nunca=$preguntas[0];
        $student->siempre=$preguntas[1];
        $student->aveces=$preguntas[2];
        $student->save();

        $datos = Student::where('user_id',Auth::user()->id)->get()[0];
        $datos->identSurveyCompleted = 1;
        $datos->save();
        
        return redirect("/estudiante")->with('status', 'Guardado !');
    }


    public function identityform_show(Request $request){
        if(Auth::user()->role != 0)
            abort(403,"Usuario no autorizado.");
        
        $datos = Student::where('user_id',Auth::user()->id)->get()[0];
        
        return view('estudiante.identityform',['datos_estudiante'=>$datos]);
    }

    public function usabilityform_show(){

        $datos = Usability::where('user_id',Auth::user()->id)->get()[0];
        return view('estudiante.usability',['usability_data'=>$datos]);
    }

    public function usabilityform_save(Request $request){
        if(Auth::user()->role != 0)
            abort(403,"Usuario no autorizado.");

        $preguntas = [0,0,0,0,0];

        $student = Usability::where("user_id",Auth::user()->id)->get()[0];
        
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
