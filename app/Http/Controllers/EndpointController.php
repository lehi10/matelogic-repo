<?php

namespace App\Http\Controllers;
use Auth;
use  App\User;
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

    public function questions(Request $request)
    {
        $idP=$request['idP'];
        $idq=$request['idQ'];
        $counter=$request['Counter'];
        if($idP && $idq && $counter){
            return response()->json(['code'=> 200,'message'=>'Si se guardo correctamente']);
        }
        else{
            return response()->json(['code'=> 400,'message'=>'Not Found']);
        }
            
    }
}
