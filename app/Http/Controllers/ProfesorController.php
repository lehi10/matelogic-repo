<?php

namespace App\Http\Controllers;

use  App\Student;
use  App\Interest;
use  App\Stage;
use  App\Valoration;
use  App\Star;
use  App\Coin;
use  App\IndentityQuestions;
use App\Usability;
use App\Item;
use DB;
use Auth;
use Charts;
use Illuminate\Http\Request;


class ProfesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function starsMetric(){
      $datos = Star::where('teacher_id',Auth::user()->id)->get();
      $array_res = [];

      $array_stars = [0,0,0,0,0,0,0];

      for ($i = 0 ; $i < count($datos) ; $i++ )
      {
        $estrellas = 0 ;
        $respondidos  = ($datos[$i]->plaza > 0 ? 1 : 0) + ($datos[$i]->fundo > 0 ? 1 : 0) + ($datos[$i]->molino > 0 ? 1 : 0)  + ($datos[$i]->hospital > 0 ? 1: 0);
        
        $array_stars[$datos[$i]->plaza%6] ++;
        $array_stars[$datos[$i]->molino%6] ++;
        $array_stars[$datos[$i]->fundo%6] ++;
        $array_stars[$datos[$i]->hospital%6] ++;
      }

      // En posicion 0 no se cuenta

      $total = $array_stars[1]+$array_stars[2]+$array_stars[3]+$array_stars[4]+$array_stars[5]+$array_stars[6]; 

      return array("s1"=> $array_stars[1], "s2"=>$array_stars[2], "s3"=>$array_stars[3], "s4"=>$array_stars[4], "s5"=>$array_stars[5], "s6"=>$array_stars[6], "total"=>$total);
    }

    public function emotionsMetric(){
      $datos = Star::where('teacher_id',Auth::user()->id)->get();
      $array_res = [];
      for ($i = 0 ; $i < count($datos) ; $i++ )
      {
        $emotion = 0 ;
        $respondidos  = ($datos[$i]->plaza > 0 ? 1 : 0) + ($datos[$i]->fundo > 0 ? 1 : 0) + ($datos[$i]->molino > 0 ? 1 : 0)  + ($datos[$i]->hospital > 0 ? 1: 0);

        if($respondidos != 0)
          $emotion = ($datos[$i]->plaza + $datos[$i]->fundo + $datos[$i]->molino + $datos[$i]->hospital)/$respondidos;
        array_push($array_res, $emotion);
      }

      $aburrido = 0;
      $feliz = 0;
      $triste = 0;

      for ($i = 0 ; $i < count($array_res) ; $i++ ) {
        if($array_res[$i] < 2)
          $triste ++;
        else if($array_res[$i] < 3.5)
            $aburrido++;
        else
          $feliz ++;
      }

      $totalEmociones = count($array_res);
      $pc_feliz=$totalEmociones ==0 ? 0 : ($feliz*100)/$totalEmociones;
      $pc_aburrido=$totalEmociones ==0 ? 0 : ($aburrido*100)/$totalEmociones;
      $pc_triste=$totalEmociones ==0 ? 0 : (($triste*100)/$totalEmociones);

      $obj_res = array( "emotions"=> $array_res, "feliz"=>$feliz, "triste"=>$triste, "aburrido"=>$aburrido, 
                                                  "pc_feliz"=> $pc_feliz,"pc_triste"=>$pc_triste, "pc_aburrido"=>$pc_aburrido );
      return $obj_res;
    }

    public function coinsMetric(){
      $data = DB::table('coins')->join('users','users.id','=','coins.user_id')->get();
      
      $datos = collect($data)->map(function($x){ return (array) $x; })->toArray(); 

      $responseArray = [];
      foreach($datos as $row){
        $total = $row["molino"] + $row["plaza"] + $row["hospital"]+ $row["fundo"];
        array_push($responseArray,array("nombre"=>$row["name"], "plaza"=>$row["plaza"], "molino"=>$row["molino"], "hospital"=>$row["hospital"],"fundo"=>$row["fundo"], "total"=>$total));
      }
      
      return $responseArray;
    }

    public function storeMetric(){

      $datos = Item::where('teacher_id',Auth::user()->id)->get();

      $valoracion = 0;
      $percepcion = 0;
      $interes = 0;

      foreach($datos as $row){
        $valoracion = $valoracion+ $row['obj1']+$row['obj2']+$row['obj3']+$row['obj4']+$row['obj5']+$row['obj6']+$row['obj7']+$row['obj8']+$row['obj9']+$row['obj10'];
        $interes = $interes+ $row['obj11']+$row['obj12']+$row['obj13']+$row['obj14']+$row['obj15']+$row['obj16']+$row['obj17']+$row['obj18']+$row['obj19']+$row['obj20']+$row['obj21']+$row['obj22'];
        $percepcion = $percepcion+ $row['obj23']+$row['obj24'];
        
      }     
      

      return Array("valoracion"=>$valoracion,"percepcion"=>$percepcion,"interes"=>$interes);
    }

    public function usabilityMetric(){
      $datos = Usability::where('teacher_id',Auth::user()->id)->get();

      $totaldesacuerdo = 0;
      $desacuerdo = 0;
      $neutro = 0;
      $deacuerdo = 0;
      $totaldeacuerdo = 0;

      

      foreach($datos as $row){
          for($i = 1 ; $i<=15;$i++){
            if($row["q$i"] == 0)
              $totaldesacuerdo++;
            else  if ($row["q$i"] == 1){
              $desacuerdo ++;
            }
            else if($row["q$i"]==2){
              $neutro++;
            }
            else if($row["q$i"]==3){
              $deacuerdo++;
            }
            else if($row["q$i"]==4){
              $totaldeacuerdo++;
            }
          }
      }
      $total = $totaldesacuerdo +  $desacuerdo + $neutro + $deacuerdo + $totaldeacuerdo;
      
      return Array("totaldesacuerdo"=>$totaldesacuerdo,"desacuerdo"=>$desacuerdo,"neutro"=>$neutro,"deacuerdo"=>$deacuerdo,"totaldeacuerdo"=>$totaldeacuerdo, "total"=>$total);
    }

    public function firstIntent(){
      $datos = IndentityQuestions::where('teacher_id',Auth::user()->id)->get();

      $satisfactorio = 0;
      $proceso = 0;
      $inicio = 0 ;
      $previoInicio = 0;

      foreach($datos as $row){
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

        if($total <= 11){
          $previoInicio ++;
        }
        else if($total <= 23) {
          $inicio++;
        }
        else if($total <= 35){
          $proceso++;
        }
        else if($total > 35){
          $satisfactorio++;

        }
      }
      $total = count($datos);
      return Array("satisfactorio"=> $satisfactorio, "proceso"=>$proceso, "inicio"=>$inicio, "previoInicio"=>$previoInicio,"total"=>$total);
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

            $row->fi1 === 1 ? $integrative0intents ++ : ( $row->fi1 > 1 ? $integrativeMoreintents++: null) ;
            $row->fi2 === 1 ? $integrative0intents ++ : ( $row->fi2 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi3 === 1 ? $integrative0intents ++ : ( $row->fi3 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi4 === 1 ? $integrative0intents ++ : ( $row->fi4 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi5 === 1 ? $integrative0intents ++ : ( $row->fi5 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi6 === 1 ? $integrative0intents ++ : ( $row->fi6 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi7 === 1 ? $integrative0intents ++ : ( $row->fi7 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi8 === 1 ? $integrative0intents ++ : ( $row->fi8 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi9 === 1 ? $integrative0intents ++ : ( $row->fi9 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi10 === 1 ? $integrative0intents ++ : ( $row->fi10 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi11 === 1 ? $integrative0intents ++ : ( $row->fi11 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi12 === 1 ? $integrative0intents ++ : ( $row->fi12 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi13 === 1 ? $integrative0intents ++ : ( $row->fi13 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi14 === 1 ? $integrative0intents ++ : ( $row->fi14 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi15 === 1 ? $integrative0intents ++ : ( $row->fi15 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi16 === 1 ? $integrative0intents ++ : ( $row->fi16 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi17 === 1 ? $integrative0intents ++ : ( $row->fi17 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi18 === 1 ? $integrative0intents ++ : ( $row->fi18 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi19 === 1 ? $integrative0intents ++ : ( $row->fi19 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi20 === 1 ? $integrative0intents ++ : ( $row->fi20 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi21 === 1 ? $integrative0intents ++ : ( $row->fi21 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi22 === 1 ? $integrative0intents ++ : ( $row->fi22 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi23 === 1 ? $integrative0intents ++ : ( $row->fi23 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi24 === 1 ? $integrative0intents ++ : ( $row->fi24 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi25 === 1 ? $integrative0intents ++ : ( $row->fi25 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi26 === 1 ? $integrative0intents ++ : ( $row->fi26 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi27 === 1 ? $integrative0intents ++ : ( $row->fi27 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi28 === 1 ? $integrative0intents ++ : ( $row->fi28 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi29 === 1 ? $integrative0intents ++ : ( $row->fi29 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi30 === 1 ? $integrative0intents ++ : ( $row->fi30 > 1 ? $integrativeMoreintents++: null)  ;

            $row->fi31 === 1 ? $integrative0intents ++ : ( $row->fi31 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi32 === 1 ? $integrative0intents ++ : ( $row->fi32 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi33 === 1 ? $integrative0intents ++ : ( $row->fi33 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi34 === 1 ? $integrative0intents ++ : ( $row->fi34 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi35 === 1 ? $integrative0intents ++ : ( $row->fi35 > 1 ? $integrativeMoreintents++: null)  ;
            $row->fi36 === 1 ? $integrative0intents ++ : ( $row->fi36 > 1 ? $integrativeMoreintents++: null)  ;
               
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
        $scoreAcc = [$fundoFierro, $plazaArmas, $hospital, $molino];

        $stars = $this->starsMetric();
        $emotions = $this->emotionsMetric();
        $coins =  $this->coinsMetric();
        $selectedItems = $this->storeMetric();
        $firstIntent = $this->firstIntent();
        $usabilityMetric = $this->usabilityMetric();

        return view('profesor.index',[
            'counters'=>$counters, 
            'oneIntents'=>$oneIntents, 
            'moreIntents'=>$moreIntents, 
            'totalRows'=>$totalRows,
            'metricsObjSelected'=>$metricsObjSelected,
            'scoreAcc'=>$scoreAcc,
            'stars'=> $stars,
            'emotions'=>$emotions,
            'coins'=>$coins,
            'selectedItems'=>$selectedItems,
            'firstInten'=>$firstIntent,
            'usabilityMetric'=>$usabilityMetric]
        );
    }


    
}
