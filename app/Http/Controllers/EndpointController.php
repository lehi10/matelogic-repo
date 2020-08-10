<?php

namespace App\Http\Controllers;
use Auth;
use  App\User;
use App\Item;
use App\Coin;
use App\Star;
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
        
        $userID = $request['userID'];
        $estrellas = $request['estrellas'];


        $itemsArray = explode(',',$estrellas);
        $obj0 = intval($itemsArray[0]);
        $obj1 = intval($itemsArray[1]);
        $obj2 = intval($itemsArray[2]);
        $obj3 = intval($itemsArray[3]);
        

        $estrellasArray = Star::where('user_id',$userID)->get()[0];
        $estrellasArray->plaza=$obj0;
        $estrellasArray->fundo=$obj1;
        $estrellasArray->molino=$obj2;
        $estrellasArray->hospital=$obj3;
        $estrellasArray->save();
        
        
        return response()->json(['code'=> 200,'message'=>'Success']);
    }

    public function endpointMonedas(Request $request){


        $userID = $request['userID'];
        $modenas = $request['monedas'];


        $itemsArray = explode(',',$modenas);
        $obj0 = intval($itemsArray[0]);
        $obj1 = intval($itemsArray[1]);
        $obj2 = intval($itemsArray[2]);
        $obj3 = intval($itemsArray[3]);
        

        $monedasArray = Coin::where('user_id',$userID)->get()[0];
        $monedasArray->plaza=$obj0;
        $monedasArray->fundo=$obj1;
        $monedasArray->molino=$obj2;
        $monedasArray->hospital=$obj3;
        $monedasArray->save();
        
        
        return response()->json(['code'=> 200,'message'=>'Success']);

    }

    public function endpointTienda(Request $request){

        
        
        $userID = $request['userID'];
        $itemsTienda = $request['tienda'];


        $itemsArray = explode(',',$itemsTienda);
        $obj0 = intval($itemsArray[0]);
        $obj1 = intval($itemsArray[1]);
        $obj2 = intval($itemsArray[2]);
        $obj3 = intval($itemsArray[3]);
        $obj4 = intval($itemsArray[4]);
        $obj5 = intval($itemsArray[5]);
        $obj6 = intval($itemsArray[6]);
        $obj7 = intval($itemsArray[7]);
        $obj8 = intval($itemsArray[8]);
        $obj9 = intval($itemsArray[9]);
        $obj10 = intval($itemsArray[10]);
        $obj11 = intval($itemsArray[11]);
        $obj12 = intval($itemsArray[12]);
        $obj13 = intval($itemsArray[13]);
        $obj15 = intval($itemsArray[14]);
        $obj16 = intval($itemsArray[15]);
        $obj17 = intval($itemsArray[16]);
        $obj18 = intval($itemsArray[17]);
        $obj19 = intval($itemsArray[18]);
        $obj19 = intval($itemsArray[19]);
        $obj20 = intval($itemsArray[20]);
        $obj21 = intval($itemsArray[21]);
        $obj22 = intval($itemsArray[22]);
        $obj23 = intval($itemsArray[23]);
        
        $itemsTienda = Item::where('user_id',$userID)->get()[0];
        $itemsTienda->obj1=$obj0;
        $itemsTienda->obj2=$obj1;
        $itemsTienda->obj3=$obj2;
        $itemsTienda->obj4=$obj3;
        $itemsTienda->obj5=$obj4;
        $itemsTienda->obj6=$obj5;
        $itemsTienda->obj7=$obj6;
        $itemsTienda->obj8=$obj7;
        $itemsTienda->obj9=$obj8;
        $itemsTienda->obj10=$obj9;
        $itemsTienda->obj11=$obj10;
        $itemsTienda->obj12=$obj11;
        $itemsTienda->obj13=$obj12;
        $itemsTienda->obj14=$obj13;
        $itemsTienda->obj15=$obj14;
        $itemsTienda->obj16=$obj15;
        $itemsTienda->obj17=$obj16;
        $itemsTienda->obj18=$obj17;
        $itemsTienda->obj19=$obj18;
        $itemsTienda->obj20=$obj19;
        $itemsTienda->obj21=$obj20;
        $itemsTienda->obj22=$obj21;
        $itemsTienda->obj23=$obj22;
        $itemsTienda->obj24=$obj23;
        $itemsTienda->save();
        
        
        return response()->json(['code'=> 200,'message'=>'Success']);
    }

}
