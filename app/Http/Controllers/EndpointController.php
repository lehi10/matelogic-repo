<?php

namespace App\Http\Controllers;
use Auth;
use  App\User;
use App\Item;
use App\IndentityQuestions;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    

    public function login(Request $request)
    {
        
        $username=$request['username'];
        $password=$request['pass'];

        error_log($username);
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            $datos = User::where('username',$username)->get()[0];
            $id =  $datos["id"];
            $name= $datos["name"];
            $email= $datos["email"];
            return response()->json(['id'=> $id,'name' => $name, 'state' => $email]);

        }
        else{
            return response()->json(['code'=> 400,'message'=>'Not Found']);
        }
        
        
        return response()->json(['code'=> 500,'message'=>'Error']);
    }
    public function findIdQuestion($idQ)
    {

        $questionsNames =['fs1','fs2','fs3','fs4','fs5','fs6',
        'fl1','fl2','fl3','fl4','fl5',
        'fi1','fi2','fi3','fi4','fi5','fi6','fi7','fi8','fi9','fi10',
        'fi11','fi12','fi13','fi14','fi15','fi16','fi17','fi18','fi19','fi20',
        'fi21','fi22','fi23','fi24','fi25','fi26','fi27','fi28','fi29','fi30',
        'fi31','fi32','fi33','fi34','fi35','fi36'];

        if($questionsNames[$idQ])
            return $questionsNames[$idQ];
        else 
            return 0;
        
    }

    public function questions(Request $request)
    {
        $idP=$request['idP'];
        $idQ=$request['idQ'];
        $counter=$request['Counter'];

        if($idP && $idQ && $counter){
            $questionObj = IndentityQuestions::where('user_id', $idP)->get();
            
            if(isset($questionObj[0]))
            {
                $question =$questionObj[0];
                $stringQ = $this->findIdQuestion($idQ);
                $question[$stringQ] = $counter;
                $question->save();
                return response()->json(['code'=> 200,'message'=>'Si se guardo correctamente']);
            }
            else{
                return response()->json(['code'=> 400,'message'=>'Not Found :(']);
            }
            
        }
        else{
            return response()->json(['code'=> 400,'message'=>'Not Found']);
        }
            
    }

    public function  endpointEstrellas(Request $request){
        

    }

    public function endpointMonedas(Request $request){

    }

    public function endpointTienda(Request $request){

        
        
        $userID = $request['userID'];
        $itemsTienda = $request['tienda'];


        $itemsArray = explode(',',$itemsTienda);
        $obj1 = intval($itemsArray[0]);
        

        $itemsTienda = Item::where('user_id',$userID)->get()[0];
        $itemsTienda->obj1=$obj1;
        $itemsTienda->save();
        return $itemsTienda;
        
        
        return response()->json(['code'=> 200,'message'=>'Success']);
    }

}
